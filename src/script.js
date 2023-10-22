/** @format */
const questions = {
	"DONATION AND ADOPTION RELATED QUESTIONS": [
		{
			question: "How can I make a donation to support your organization?",
			answer: `Bank Transfer Acct Name: The Philippine Animal Welfare Society, Inc. Bank of the Philippine Islands (Swift no. BOPIPHMM)<br>USD Acct No.:  <span class="underline">3944-0021-61</span> <br>PHP Acct No.: <span class="underline">3943-0086-11</span><br><br>Philippine National Bank (Swift no. PNBM PHMM)<br>Acct No.: <span class="underline">1888-70015305</span> BDO Savings Acct No.: <span class="underline">0036-4007-0350</span><br><br> Where does the donation money go?Based on PAW, the donation goes to food, shelter and as much love and attention as possible for those animals who come into their care, and they do their best to find them loving, permanent homes. The cost of rescuing, treating, and rehabilitating animals will be too much for a small struggling shelter if not for the help of supporters and donors.`,
		},
		{
			question: "Are there any adoption fee?",
			answer: "Yes! it cost 500 php for a cat and 1000 php for a dog.",
		},
	],
};

const chatbox = document.getElementById("chatbox");
const chatMessages = document.getElementById("chatMessages");
const showAllQuestionsButton = document.getElementById("showAllQuestions");

function createMessage(question, answer) {
	const message = document.createElement("div");
	message.classList.add("message");
	message.innerHTML = `
    <div class="message-question cursor-pointer text-primary bg-white shadow-lg py-1 px-4 rounded-2xl w-full">${question}</div>
    <div class="message-answer hidden w-full">${answer}</div>
  `;

	const answerElement = message.querySelector(".message-answer");

	message.querySelector(".message-question").addEventListener("click", () => {
		const questionElements = chatMessages.querySelectorAll(".message-question");

		setTimeout(() => {
			answerElement.classList.remove("hidden");
		}, 1000);

		questionElements.forEach((el) => {
			if (el !== message.querySelector(".message-question")) {
				el.classList.add("hidden");
			}
		});
		chatMessages.querySelectorAll(".message-answer").forEach((el) => {
			if (el !== answerElement) {
				el.classList.add("hidden");
			}
		});
	});

	return message;
}

function loadQuestions() {
	chatMessages.innerHTML = "";

	for (const category in questions) {
		const categoryQuestions = questions[category];
		chatMessages.innerHTML += `<div class="text-lg font-semibold mt-4">${category}</div>`;
		categoryQuestions.forEach((qa) => {
			chatMessages.appendChild(createMessage(qa.question, qa.answer));
		});
	}
}

function closeChatbox() {
	chatbox.classList.add("hidden");
}

document.getElementById("openChat").addEventListener("click", () => {
	chatbox.classList.remove("hidden");
	loadQuestions();
});

showAllQuestionsButton.addEventListener("click", () => {
	const questionElements = chatMessages.querySelectorAll(".message-question");
	const answerElements = chatMessages.querySelectorAll(".message-answer");

	questionElements.forEach((el) => el.classList.remove("hidden"));
	answerElements.forEach((el) => el.classList.add("hidden"));
});
document.getElementById("closeChat").addEventListener("click", closeChatbox);
