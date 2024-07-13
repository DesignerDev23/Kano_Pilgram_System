<?php
class NotificationService {
    public static function sendWelcomeMessage($pilgrim) {
        // Send SMS
        self::sendSMS($pilgrim->phone_number, "Welcome to the Kano State e-Pilgrims Contributions System!");

        // Send WhatsApp message
        self::sendWhatsApp($pilgrim->phone_number, "Welcome to the Kano State e-Pilgrims Contributions System!");

        // Send email
        self::sendEmail($pilgrim->email, "Welcome to Kano State e-Pilgrims Contributions System", "Dear " . $pilgrim->pil_name . ",\n\nWelcome to the Kano State e-Pilgrims Contributions System!");
    }

    private static function sendSMS($phoneNumber, $message) {
        // Implementation for sending SMS
    }

    private static function sendWhatsApp($phoneNumber, $message) {
        // Implementation for sending WhatsApp message
    }

    private static function sendEmail($email, $subject, $message) {
        // Implementation for sending email
    }
}
?>
