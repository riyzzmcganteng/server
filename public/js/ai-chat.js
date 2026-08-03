/**
 * Ryzoria AI Chat - JavaScript
 * Handles chat interactions and API communication
 */

class RyzoriaAIChat {
  constructor() {
    this.chatBtn = document.getElementById('aiChatBtn');
    this.chatModal = document.getElementById('aiChatModal');
    this.chatMessages = document.getElementById('aiChatMessages');
    this.chatInput = document.getElementById('aiChatInput');
    this.sendBtn = document.getElementById('aiChatSendBtn');
    this.clearBtn = document.getElementById('aiChatClearBtn');
    this.closeBtn = document.getElementById('aiChatCloseBtn');
    this.inputArea = document.getElementById('aiChatInputArea');

    this.isLoading = false;
    this.chatHistory = [];

    this.init();
  }

  init() {
    this.loadChatHistory();
    this.attachEventListeners();
    this.displayStoredMessages();
  }

  attachEventListeners() {
    this.chatBtn.addEventListener('click', () => this.toggleChat());
    this.sendBtn.addEventListener('click', () => this.sendMessage());
    this.clearBtn.addEventListener('click', () => this.clearChat());
    this.closeBtn.addEventListener('click', () => this.closeChat());
    this.chatInput.addEventListener('keydown', (e) => this.handleKeyPress(e));
    this.chatInput.addEventListener('input', () => this.autoResizeInput());
  }

  toggleChat() {
    this.chatModal.classList.toggle('active');
    this.chatBtn.classList.toggle('active');

    if (this.chatModal.classList.contains('active')) {
      this.chatInput.focus();
      setTimeout(() => this.scrollToBottom(), 100);
    }
  }

  closeChat() {
    this.chatModal.classList.remove('active');
    this.chatBtn.classList.remove('active');
  }

  handleKeyPress(e) {
    // Check for IME composition (for CJK languages)
    if (e.nativeEvent.isComposing || e.keyCode === 229) {
      return;
    }

    if (e.key === 'Enter' && !e.shiftKey) {
      e.preventDefault();
      this.sendMessage();
    }
  }

  autoResizeInput() {
    this.chatInput.style.height = 'auto';
    const newHeight = Math.min(this.chatInput.scrollHeight, 100);
    this.chatInput.style.height = newHeight + 'px';
  }

  async sendMessage() {
    const message = this.chatInput.value.trim();

    if (!message || this.isLoading) {
      return;
    }

    // Add user message to chat
    this.addMessage(message, 'user');
    this.chatHistory.push({ role: 'user', content: message });
    this.saveChatHistory();

    // Clear input
    this.chatInput.value = '';
    this.chatInput.style.height = 'auto';
    this.sendBtn.disabled = true;

    // Show loading indicator
    this.showTypingIndicator();
    this.isLoading = true;

    try {
      const response = await fetch('api/ai-chat.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ message: message })
      });

      const data = await response.json();

      // Remove typing indicator
      this.removeTypingIndicator();

      if (response.ok && data.success) {
        const aiMessage = data.message;
        this.addMessage(aiMessage, 'ai');
        this.chatHistory.push({ role: 'assistant', content: aiMessage });
        this.saveChatHistory();
      } else {
        const errorMessage = data.message || 'Terjadi kesalahan. Silakan coba lagi.';
        this.addMessage(
          '❌ ' + errorMessage,
          'ai'
        );
      }
    } catch (error) {
      console.error('[v0] AI Chat Error:', error);
      this.removeTypingIndicator();
      this.addMessage(
        '❌ Gagal terhubung ke server. Silakan periksa koneksi Anda.',
        'ai'
      );
    } finally {
      this.isLoading = false;
      this.sendBtn.disabled = false;
      this.scrollToBottom();
      this.chatInput.focus();
    }
  }

  addMessage(text, role) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `chat-message ${role}`;

    const bubble = document.createElement('div');
    bubble.className = `message-bubble ${role}`;
    bubble.textContent = text;

    messageDiv.appendChild(bubble);
    this.chatMessages.appendChild(messageDiv);

    this.scrollToBottom();
  }

  showTypingIndicator() {
    const messageDiv = document.createElement('div');
    messageDiv.className = 'chat-message ai';
    messageDiv.id = 'typing-indicator';

    const indicator = document.createElement('div');
    indicator.className = 'typing-indicator';
    indicator.innerHTML = '<span></span><span></span><span></span>';

    messageDiv.appendChild(indicator);
    this.chatMessages.appendChild(messageDiv);

    this.scrollToBottom();
  }

  removeTypingIndicator() {
    const indicator = document.getElementById('typing-indicator');
    if (indicator) {
      indicator.remove();
    }
  }

  clearChat() {
    if (confirm('Hapus semua pesan chat? Tindakan ini tidak dapat dibatalkan.')) {
      this.chatHistory = [];
      this.chatMessages.innerHTML = '';
      this.saveChatHistory();
      this.displayWelcomeMessage();
    }
  }

  displayWelcomeMessage() {
    const welcomeDiv = document.createElement('div');
    welcomeDiv.className = 'chat-message ai';

    const bubble = document.createElement('div');
    bubble.className = 'message-bubble welcome';
    bubble.textContent = 'Halo! Saya Ryzoria AI. Saya bisa membantu tentang Ryzoria SMP maupun menjawab pertanyaan umum.';

    welcomeDiv.appendChild(bubble);
    this.chatMessages.appendChild(welcomeDiv);
  }

  saveChatHistory() {
    try {
      localStorage.setItem('ryzoria_ai_history', JSON.stringify(this.chatHistory));
    } catch (e) {
      console.error('[v0] Failed to save chat history:', e);
    }
  }

  loadChatHistory() {
    try {
      const stored = localStorage.getItem('ryzoria_ai_history');
      this.chatHistory = stored ? JSON.parse(stored) : [];
    } catch (e) {
      console.error('[v0] Failed to load chat history:', e);
      this.chatHistory = [];
    }
  }

  displayStoredMessages() {
    if (this.chatHistory.length === 0) {
      this.displayWelcomeMessage();
    } else {
      this.chatHistory.forEach((msg) => {
        this.addMessage(msg.content, msg.role === 'user' ? 'user' : 'ai');
      });
    }
  }

  scrollToBottom() {
    setTimeout(() => {
      this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
    }, 50);
  }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  window.ryzoriaAI = new RyzoriaAIChat();
});
