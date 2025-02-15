const togglePage = function (event) {
    const photos = document.getElementById('photos');
    const resume = document.getElementById('resume');
    ["font-sans", "antialiased", "leading-normal", "tracking-wider", "bg-cover", "babyBackground"].forEach((htmlClass) => document.body.classList.toggle(htmlClass));
    [photos, resume].forEach((element) => element.classList.toggle('hidden'));
}

const toggleDarkMode = function (event) {
    const html = document.getElementsByTagName('html')[0];
    const body = document.body;
    const bodyDiv = document.getElementById('resumeWrapper');
    const profile = document.getElementById('profile');

    html.classList.toggle('bg-gray-600');
    body.classList.toggle('text-gray-200');
    body.classList.toggle('text-gray-900');
    profile.classList.toggle('bg-gray-900');
    profile.classList.toggle('bg-gray-100');

    if (bodyDiv.classList.contains('text-gray-900')) {
        event.target.innerHTML = "☀️";
        return;
    }

    event.target.innerHTML = "🌙";
}

document.addEventListener('DOMContentLoaded', () => {
    const buttonWork = document.getElementById('togglePageButtonWork');
    const buttonBaby = document.getElementById('togglePageButtonBaby');
    [buttonWork, buttonBaby].forEach((button) => button?.addEventListener('click', togglePage));
})

document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('themeChanger');
    toggle?.addEventListener('click', toggleDarkMode);
})