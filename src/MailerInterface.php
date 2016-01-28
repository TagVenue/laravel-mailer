<?php namespace DeSmart\Mailer;

interface MailerInterface
{
    /**
     * @param string $email
     * @return void
     */
    public function setFromEmail($email);

    /**
     * @param string $name
     * @return void
     */
    public function setFromName($name);

    /**
     * @param string $subject
     * @param string $template
     * @return bool
     */
    public function send($subject, $template);

    /**
     * @param Recipient $recipient
     * @return void
     */
    public function addRecipient(Recipient $recipient);

    /**
     * @param Header $header
     * @return void
     */
    public function addHeader(Header $header);

    /**
     * @param string $email
     * @return void
     */
    public function setReplyTo($email);

    /**
     * @param Variable $variable
     * @return void
     */
    public function addGlobalVariable(Variable $variable);

    /**
     * @param Recipient $recipient
     * @param Variable $variable
     * @return void
     */
    public function addLocalVariable(Recipient $recipient, Variable $variable);

    /**
     * @param Attachment $attachment
     * @return void
     */
    public function addAttachment(Attachment $attachment);
}