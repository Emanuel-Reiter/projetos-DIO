const button = document.getElementById('mode-selector');
const h1 = document.getElementById('page-title');
const body = document.getElementsByTagName('body')[0];
const h3 = document.getElementsByTagName('h3')[0];

const darkMode = "Dark Mode";
const lightMode = "Light Mode";
const darkModeClass = "dark-mode";

function changeMode(){
    changeClasses();
    changeText();
}

function changeText(){
    if(button.classList.contains(darkModeClass)) {
        button.innerHTML = darkMode;
        h1.innerHTML = lightMode + " ON"; 
        return
    } else {
        button.innerHTML = lightMode;
        h1.innerHTML = darkMode + " ON";
    }
}

function changeClasses(){
    button.classList.toggle('dark-mode');
    h1.classList.toggle('dark-mode-c');
    body.classList.toggle('dark-mode-b');
    h3.classList.toggle('dark-mode-c');
}

button.addEventListener('click', changeMode);

