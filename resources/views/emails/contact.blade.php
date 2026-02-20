<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #785555; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9f9f9; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #785555; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Message</h2>
        </div>
        <div class="content">
            <div class="field">
                <p class="label">Name:</p>
                <p>{{ $contact->name }}</p>
            </div>
            <div class="field">
                <p class="label">Email:</p>
                <p>{{ $contact->email }}</p>
            </div>
            @if($contact->subject)
            <div class="field">
                <p class="label">Subject:</p>
                <p>{{ $contact->subject }}</p>
            </div>
            @endif
            <div class="field">
                <p class="label">Message:</p>
                <p>{{ $contact->message }}</p>
            </div>
        </div>
    </div>
</body>
</html>
