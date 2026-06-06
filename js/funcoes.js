/* ========================= */
/* TROCA DE TELA */
/* ========================= */

const form = document.getElementById("clienteForm");

form.addEventListener("submit", function(e){

    e.preventDefault();

    document.getElementById("cadastroScreen").style.display = "none";

    document.getElementById("dashboard").style.display = "block";
});

/* ========================= */
/* CALENDÁRIO */
/* ========================= */

const monthYear = document.getElementById("monthYear");
const calendarDays = document.getElementById("calendarDays");

const months = [
    "Janeiro","Fevereiro","Março","Abril",
    "Maio","Junho","Julho","Agosto",
    "Setembro","Outubro","Novembro","Dezembro"
];

let date = new Date();

function renderCalendar(){

    calendarDays.innerHTML = "";

    const year = date.getFullYear();
    const month = date.getMonth();

    monthYear.innerHTML = `${months[month]} ${year}`;

    const firstDay = new Date(year, month, 1).getDay();

    const lastDate = new Date(year, month + 1, 0).getDate();

    for(let i = 0; i < firstDay; i++){

        const empty = document.createElement("div");

        calendarDays.appendChild(empty);
    }

    for(let day = 1; day <= lastDate; day++){

        const dayBox = document.createElement("div");

        dayBox.classList.add("day");

        dayBox.innerHTML = `
            <div class="day-number">${day}</div>

            ${
                Math.random() > 0.7
                ? `<div class="event">Palestra Empresarial</div>`
                : ""
            }
        `;

        calendarDays.appendChild(dayBox);
    }
}

renderCalendar();

document.getElementById("prev").onclick = () => {

    date.setMonth(date.getMonth() - 1);

    renderCalendar();
};

document.getElementById("next").onclick = () => {

    date.setMonth(date.getMonth() + 1);

    renderCalendar();
};