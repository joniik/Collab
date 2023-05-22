const socket = new WebSocket('wss://https://datanomit.fi/TVT2022/jonika/:8080');

function sendMessage() {
  const username = document.getElementById('username').value;
  const message = document.getElementById('message').value;
  socket.send(username + ': ' + message);
  document.getElementById('message').value = '';
}

function handleKeyPress(event) {
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevents the default behavior of the Enter key
    sendMessage();
  }
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

document.getElementById('message').addEventListener('keydown', handleKeyPress);
document.getElementById('btn-se').addEventListener('click', sendMessage);
