const motivatedList = [{ suggestion: 'Look around and motivate someone too' }, { suggestion: 'Keep your head up, you got this!' }, { suggestion: 'That\'s the feeling' }];
const excitedList = [{ suggestion: 'Go get the party started' }, { suggestion: 'Put up a big smile to show it' }, { suggestion: 'Its a good time, remember it' }];
const generousList = [{ suggestion: 'Generousity is a power for change' }, { suggestion: 'Keep giving and be happy' }, { suggestion: 'You will save lives' }];
const depressedList = [{ suggestion: 'You are normal, everyone gets depressed sometime, so just smile' }, { suggestion: 'Treat yourself to some wonderful music and dance away!' }, { suggestion: 'Go and do something nice for someone' }];
const anxiousList = [{ suggestion: 'You have come far, you can do this!' }, { suggestion: 'Take deep breaths and allow yourself to be seen' }, { suggestion: 'There are greater things ahead, aim for them' }];
const worthlessList = [{ suggestion: 'What do you see when you look into the eyes of a baby? You are like them; precious' }, { suggestion: 'Your existence helps keep the world alive' }, { suggestion: 'There is only one of you; you are rare and of great worth' }];

//store current html content
function currentHTMLContent() {
    let currentHTML = document.querySelector('#main');
    return currentHTML;
}

//empty the first select option
function emptySelect() {
    document.querySelector('#feelings').selectedIndex = '-1';
}
emptySelect();

//display list of feelings
function getFeeling() {
    let feeling = document.querySelector('#feelings').value;
    console.log(feeling);
    return feeling;
}

//random function to be used for generating suggestions
function random() {
    return Math.floor(Math.random() * 3);
}

//show suggestion based on feeling
function getSuggestion() {
    let showSuggestion;
    let randomSuggestion = random();
    switch (getFeeling()) {
        case "motivated":
            showSuggestion = motivatedList[randomSuggestion].suggestion;
            break;
        case "excited":
            showSuggestion = excitedList[randomSuggestion].suggestion;
            break;
        case "generous":
            showSuggestion = generousList[randomSuggestion].suggestion;
            break;
        case "depressed":
            showSuggestion = depressedList[randomSuggestion].suggestion;
            break;
        case "anxious":
            showSuggestion = anxiousList[randomSuggestion].suggestion;
            break;
        case "worthless":
            showSuggestion = worthlessList[randomSuggestion].suggestion;
            break;
    }
    console.log(showSuggestion);
    return showSuggestion;
}

function displaySuggestion() {
    document.body.innerHTML = `<div id="finalResult">
    <p>${getSuggestion()}</p>
    <button type="button" onclick="location.reload()">Return</button>`;
}


document.addEventListener('change', displaySuggestion);


// fetch('um.html')
//     .then(function(response) {
//         // When the page is loaded convert it to text
//         return response.text();
//     })
//     .then(function(html) {
//         // Initialize the DOM parser
//         var parser = new DOMParser();

//         // Parse the text
//         var doc = parser.parseFromString(html, "text/html");

//         // You can now even select part of that html as you would in the regular DOM 
//         // Example:
//         // var docArticle = doc.querySelector('article').innerHTML;

//         return doc;
//     })
//     .catch(function(err) {
//         console.log('Failed to fetch page: ', err);
//     });