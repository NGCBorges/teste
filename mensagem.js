// Importe a SDK do Twilio
const Twilio = require("twilio");

// Crie uma instância do cliente Twilio
const client = new Twilio(process.env.TWILIO_ACCOUNT_SID, process.env.TWILIO_AUTH_TOKEN);

// Processe o formulário
const form = document.querySelector("form");
form.addEventListener("submit", async (event) => {
  // Obtenha os dados do formulário
  const telefone = event.target.telefone.value;
  const mensagem = event.target.mensagem.value;

  // Envie um SMS
  try {
    const response = await client.messages.create({
      to: telefone,
      from: process.env.TWILIO_PHONE_NUMBER,
      body: mensagem,
    });

    // Mostre uma mensagem de sucesso
    alert("SMS enviado com sucesso!");
  } catch (error) {
    // Mostre uma mensagem de erro
    alert(error.message);
  }

  event.preventDefault();
});
