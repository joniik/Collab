const socket = new WebSocket('ws://localhost:8080');

function sendMessage() {
  const username = document.getElementById('username').value;
  const message = document.getElementById('message').value;
  socket.send(username + ': ' + message);
  document.getElementById('message').value = '';
}

socket.onmessage = (event) => {
  const message = event.data;
  if (typeof message === 'string') {
    const chatBox = document.getElementById('chat-box');
    const newMessage = document.createElement('p');
    newMessage.innerText = message;
    chatBox.appendChild(newMessage);
  } else {
    message.text().then((text) => {
      const chatBox = document.getElementById('chat-box');
      const newMessage = document.createElement('p');
      newMessage.innerText = text;
      chatBox.appendChild(newMessage);
    });
  }
};
