let country = document.querySelectorAll('.country');
let countryArray = [];
let japan = 0;
let korea = 0;
let india = 0;

for (i = 0; i < country.length; i++) {
    countryArray[i] = country[i].textContent;
}
for (i = 0; i < countryArray.length; i++) {
    if (countryArray[i] == "Japan") {
        japan += 1;
    } else if (countryArray[i] == "Korea") {
        korea += 1;
    } else if (countryArray[i] == "India") {
        india += 1;
    }
}
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Japan', 'Korea', 'India'],
        datasets: [{
            label: 'Number of people in different Country',
            data: [japan, korea, india],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1,
            inflateAmount: 1,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                display: true,
                stacked: true,
                ticks: {
                    min: 0, // minimum value
                    max: 10 // maximum value
                }
            }]
        }
    }
});