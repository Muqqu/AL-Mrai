# Checkout Flow

Checkout validates billing data, parses card expiry, records card details, creates a payment token, charges payment, writes order records, and sends mail.

Failures should redirect back with visible validation or payment errors.
