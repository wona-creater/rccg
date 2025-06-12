<!DOCTYPE html>
<html>
<head>
    <title>Crypto Refund Processed</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #1978e5;">Crypto Refund</h2>

        <p>Dear Recipient,</p>

        <p>We are pleased to inform you about your refund details:</p>

        <ul>
            <li><strong>Cryptocurrency:</strong> {{ $cryptoType }}</li>
            <li><strong>Quantity:</strong> {{ number_format($quantity, 8) }}</li>
        </ul>

        <p>Your refund has been processed successfully!</p>

        <p>If you have any questions, please contact our support team.</p>

        <p>Best regards,<br>Your Crypto Team</p>
    </div>
</body>
</html>
