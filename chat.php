<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat Interface</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-XG3z+dwhzU8ILGzR5vPR4zvpYKbkfL61W7P7t51Vmg9vIN0BhFoc9MN4+asj1lJU+xBG7J1eZRRppUzXQyaBTw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    .chat-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .chat-box {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 400px;
    }

    .chat-header {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .chat-title {
      font-size: 18px;
      font-weight: bold;
      margin: 0;
    }

    .chat-header-icons {
      display: flex;
    }

    .chat-header-icon {
      margin-left: 10px;
      cursor: pointer;
    }

    .chat-body {
      padding: 10px;
      max-height: 300px;
      overflow-y: auto;
    }

    .chat-message {
      display: flex;
      margin-bottom: 15px;
    }

    .chat-message img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
    }

    .chat-message-content {
      background-color: #f1f1f1;
      padding: 10px;
      border-radius: 10px;
      max-width: 70%;
      word-wrap: break-word;
    }

    .chat-time {
      font-size: 12px;
      color: #888;
      margin-left: auto;
    }

    .chat-footer {
      display: flex;
      padding: 10px;
      border-top: 1px solid #ddd;
    }

    .chat-input {
      flex: 1;
      border-radius: 20px;
      padding: 8px 15px;
      border: 1px solid #ddd;
      font-size: 14px;
      outline: none;
    }

    .send-button {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 8px 20px;
      border-radius: 20px;
      margin-left: 10px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="chat-container">
    <div class="chat-box">
      <div class="chat-header">
        <div class="chat-title">Chat</div>
        <div class="chat-header-icons">
          <i class="fas fa-search chat-header-icon"></i>
          <i class="fas fa-ellipsis-v chat-header-icon"></i>
        </div>
      </div>
      <div class="chat-body">
        <div class="chat-message">
          <img src="Jerico Room.jpg" alt="Jerico">
          <div class="chat-message-content">
            <p>Kamusta kayo guy's?</p>
            <div class="chat-time">09:40 PM</div>
          </div>
        </div>
        <div class="chat-message">
          <img src="Jerico Room.jpg" alt="Jerico">
          <div class="chat-message-content">
            <p>May gumagamit pa ba ng mga Appliances sa Living Room?</p>
            <div class="chat-time">09:40 PM</div>
          </div>
        </div>
        <div class="chat-message">
          <img src="Cristina Room.jpg" alt="Cristina">
          <div class="chat-message-content">
            <p>Opo meron pa po.</p>
            <div class="chat-time">09:40 PM</div>
          </div>
        </div>
        <div class="chat-message">
          <img src="Cristina Room.jpg" alt="Cristina">
          <div class="chat-message-content">
            <p>Sina Kathleen at si Rovic</p>
            <div class="chat-time">09:40 PM</div>
          </div>
        </div>
      </div>
      <div class="chat-footer">
        <input type="text" class="chat-input" placeholder="Type your message...">
        <button class="send-button">Send</button>
      </div>
    </div>
  </div>
  <script>
    const input = document.querySelector('.chat-input');
    const button = document.querySelector('.send-button');
    
    button.addEventListener('click', () => {
      const message = input.value.trim();
      if (message !== '') {
        // Here you can handle sending the message
        console.log('Sending message:', message);
        input.value = ''; // Clear the input field after sending
      }
    });
  </script>
</body>

</html>
