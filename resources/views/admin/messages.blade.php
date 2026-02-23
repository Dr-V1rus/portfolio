<!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * { font-family: Arial, sans-serif; }
        body { background: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #785555; margin-top: 0; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #785555; color: white; padding: 12px; text-align: left; }
        td { padding: 10px; border-bottom: 1px solid #ddd; }
        tr:hover { background: #f9f9f9; }
        .badge { background: #e0e0e0; padding: 3px 8px; border-radius: 12px; font-size: 12px; }
        .unread { font-weight: bold; background: #fff3e0; }
        .read { opacity: 0.8; }
        .btn { background: #785555; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-size: 12px; }
        .btn:hover { background: #634444; }
    </style>
</head>
<body>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h1>Contact Messages</h1>
            <a href="/" target="_blank" class="btn">View Site</a>
        </div>

        @php
            $messages = App\Models\Contact::orderBy('created_at', 'desc')->get();
        @endphp

        @if($messages->count() > 0)
            <table>
                <tr>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                @foreach($messages as $msg)
                <tr class="{{ $msg->is_read ? 'read' : 'unread' }}">
                    <td>
                        @if(!$msg->is_read)
                            <span class="badge" style="background: #785555; color: white;">New</span>
                        @else
                            <span class="badge">Read</span>
                        @endif
                    </td>
                    <td>{{ $msg->name }}</td>
                    <td><a href="mailto:{{ $msg->email }}">{{ $msg->email }}</a></td>
                    <td>{{ $msg->subject ?? 'No subject' }}</td>
                    <td>{{ Str::limit($msg->message, 50) }}</td>
                    <td>{{ $msg->created_at->format('M d, Y H:i') }}</td>
                    <td>
                        <a href="/admin/messages/{{ $msg->id }}" class="btn">View</a>
                    </td>
                </tr>
                @endforeach
            </table>
        @else
            <p style="text-align: center; color: #666; padding: 40px;">No messages yet.</p>
        @endif
    </div>
</body>
</html>