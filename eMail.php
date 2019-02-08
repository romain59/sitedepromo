<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/02/2019
 * Time: 14:18
 */

class eMail
{
    private $destinataire;
    private $sujet;
    private $message;
    private $nom;
    private $expediteur_nom;
    protected $expediteur_mail;
    private $headers;
    private $body;
    private $pieceJointe;

    public function __construct()
    {
        $this->expediteur_nom = 'Simon';
        $this->expediteur_mail = 's.stien@fondationface.org';
    }

    private function strFiltre(string $str)
    {
        return trim(filter_var($str, FILTER_SANITIZE_STRING));
    }

    private function encoderPieceJointe($fichier)
    {
        if (!empty($fichier) && is_file($fichier)) {
            $opFichier = fopen($fichier, 'r');
            $attachement = fread($opFichier, filesize($fichier));
            $attachement = chunk_split(base64_encode($attachement));
            fclose($opFichier);
            return $attachement;
        }
    }

    public function PJ($fichier)
    {
        $this->pieceJointe = $fichier;
    }

    public function destinataire(string $dest)
    {
        $this->destinataire = self::strFiltre($dest);
    }
    public function expediteur()
    {
        return $this->expediteur_mail;
    }

    public function nom($nom)
    {
        $this->nom = self::strFiltre($nom);
    }

    public function sujet(string $sujet)
    {
        $this->sujet = self::strFiltre($sujet);
    }

    public function message(string $message)
    {
        $this->message = self::strFiltre($message);
    }

    public function envoi(bool $html)
    {
        $separator = md5(time());

        $eol = "\r\n";

        //entête
        $this->headers = 'From: ' . $this->expediteur_nom . ' <' . $this->expediteur_mail . '>' . $eol;
        $this->headers .= 'To: ' . $this->nom . ' <' . $this->destinataire . '>' . $eol;
        $this->headers .= 'Subject: ' . $this->sujet . $eol;
        $this->headers .= 'MIME-Version: 1.0' . $eol;
        $this->headers .= 'Content-Type: multipart/mixed; boundary="' . $separator . '"' . $eol;
        $this->headers .= 'Content-Transfer-Encoding: 7bit' . $eol;
        $this->headers .= 'This is a MIME encoded message.' . $eol;

        //message
        $this->body = '--' . $separator . $eol;
        if ($html === true) {
            $this->body .= 'Content-type: text/html; charset="UTF-8"' . $eol;

            $msg = '<html lang="fr"><head><title>' . htmlentities($this->sujet) . '</title></head><body>' . nl2br($this->message) . '</body></html>';
        } else {
            $this->body .= 'Content-type: text/plain; charset="UTF-8"' . $eol;
            $msg = $this->message;
        }
        $this->body .= 'Content-Transfer-Encoding: 8bit' . $eol;
        $this->body .= $msg . $eol;

        $fichierSeul = pathinfo($this->pieceJointe);
        $resuktatFichierSeul = $fichierSeul['filename'] . '.' . $fichierSeul['extension'];

        //PJ
        if(isset($this->pieceJointe)) {
            $this->body .= '--' . $separator . $eol;
            $this->body .= 'Content-Type: application/octet-stream; name="' . $resuktatFichierSeul . '"' . $eol;
            $this->body .= "Content-Transfer-Encoding: base64" . $eol;
            $this->body .= 'Content-Disposition: attachment; filename="' . $resuktatFichierSeul . '"' . $eol;
            $this->body .= self::encoderPieceJointe($this->pieceJointe) . $eol;
        }
        $this->body .= '--' . $separator . '--';

        //envoi
        if (!empty($this->destinataire) && !empty($this->sujet) && !empty($msg)) {
            if (mail($this->destinataire, $this->sujet, $this->body, $this->headers)) {
                return 'email envoyé';
            } else {
                print_r(error_get_last());
                return 'Echec de l\'envoi';

            }
        } else {
            return 'email incomplet';
        }
    }
}