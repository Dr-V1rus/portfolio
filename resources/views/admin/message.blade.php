<!DOCTYPE html>
<html>
<head>
    <title>View Message</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * { font-family: Arial, sans-serif; }
        body { background: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #785555; margin-top: 0; }
        .field { margin-bottom: 20px; }
        .label { font-weight: bold; color: #555; margin-bottom: 5px; }
        .value { background: #f9f9f9; padding: 10px; border-radius: 5px; }
        .btn { background: #785555; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; margin-right: 10px; }
        .btn:hover { background: #634444; }
        .btn-secondary { background: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h1>Message from {{ $message->name }}</h1>
            <a href="/admin/messages" class="btn btn-secondary">← Back</a>
        </div>

        <div class="field">
            <div class="label">Name:</div>
            <div class="value">{{ $message->name }}</div>
        </div>

        <div class="field">
            <div class="label">Email:</div>
            <div class="value"><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></div>
        </div>

        @if($message->subject)
        <div class="field">
            <div class="label">Subject:</div>
            <div class="value">{{ $message->subject }}</div>
        </div>
        @endif

        <div class="field">
            <div class="label">Message:</div>
            <div class="value" style="white-space: pre-wrap;">{{ $message->message }}</div>
        </div>

        <div class="field">
            <div class="label">Received:</div>
            <div class="value">{{ $message->created_at->format('F j, Y \a\t g:i A') }}</div>
        </div>

        <div class="field">
            <div class="label">Status:</div>
            <div class="value">
                @if($message->is_read) Read @else Unread @endif
            </div>
        </div>

        <div style="margin-top: 30px;">
            <a href="mailto:{{ $message->email }}" class="btn">Reply via Email</a>
        </div>
    </div>
</body>
</html>