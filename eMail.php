<?php
/**
 * Created by PhpStorm.
 * User: Gregory CARON
 * Date: 08/02/2019
 * Time: 14:18
 */

class eMail
{
    private $destinataire_nom;
    private $destinataire_mail;
    private $expediteur_nom;
    private $expediteur_mail;
    private $sujet;
    private $message;
    private $headers;
    private $body;
    private $pieceJointe;

    public function __construct()
    {
        $this->destinataire_nom = 'Simon';
        $this->destinataire_mail = 's.stien@fondationface.org';
    }

    private function eol()
    {
        return "\r\n";
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
        } else {
            $attachement = null;
        }
        return $attachement;
    }

    public function PJ($fichier)
    {
        $this->pieceJointe = $fichier;
    }

    public function destinataire_mail()
    {
        return $this->destinataire_mail;
    }

    public function destinataire_nom()
    {
        return $this->destinataire_nom;
    }

    public function expediteur_nom(string $nom)
    {
        $this->expediteur_nom = self::strFiltre($nom);
    }

    public function expediteur_mail(string $mail)
    {
        $this->destinataire_mail = self::strFiltre($mail);
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

        //entête
        $this->headers = 'From: ' . $this->expediteur_nom . ' <' . $this->expediteur_mail . '>' . self::eol();
        $this->headers .= 'To: ' . $this->destinataire_nom . ' <' . $this->destinataire_mail . '>' . self::eol();
        $this->headers .= 'Subject: ' . $this->sujet . self::eol();
        $this->headers .= 'MIME-Version: 1.0' . self::eol();
        $this->headers .= 'Content-Type: multipart/mixed; boundary="' . $separator . '"' . self::eol();
        $this->headers .= 'Content-Transfer-Encoding: 7bit' . self::eol();
        $this->headers .= 'This is a MIME encoded message.' . self::eol();

        //message
        $this->body = '--' . $separator . self::eol();
        if ($html === true) {
            $this->body .= 'Content-type: text/html; charset="UTF-8"' . self::eol();

            $msg = '<html lang="fr"><head><title>' . htmlentities($this->sujet) . '</title></head><body>' . nl2br($this->message) . '</body></html>';
        } else {
            $this->body .= 'Content-type: text/plain; charset="UTF-8"' . self::eol();
            $msg = $this->message;
        }
        $this->body .= 'Content-Transfer-Encoding: 8bit' . self::eol();
        $this->body .= $msg . self::eol();

        $fichierSeul = pathinfo($this->pieceJointe);
        $resuktatFichierSeul = $fichierSeul['filename'] . '.' . $fichierSeul['extension'];

        //PJ
        if(isset($this->pieceJointe)) {
            $this->body .= '--' . $separator . self::eol();
            $this->body .= 'Content-Type: application/octet-stream; name="' . $resuktatFichierSeul . '"' . self::eol();
            $this->body .= "Content-Transfer-Encoding: base64" . self::eol();
            $this->body .= 'Content-Disposition: attachment; filename="' . $resuktatFichierSeul . '"' . self::eol();
            $this->body .= self::encoderPieceJointe($this->pieceJointe) . self::eol();
        }
        $this->body .= '--' . $separator . '--';

        //envoi
        if (!empty($this->destinataire) && !empty($this->sujet) && !empty($this->message)) {
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