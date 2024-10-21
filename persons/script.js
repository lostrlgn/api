const url = 'https://rickandmortyapi.com/api/character';
let template = document.querySelector('#character-template').content;

let characters = document.querySelector('.characters-list');

fetch(url).then(data => data.json()).then(data =>
    data.results.forEach(character => {
        let personage = document.importNode(template, true);
        let name = personage.querySelector('.character-name');
        let image = personage.querySelector('.character-image');
        let status = personage.querySelector('.character-status');
        let loadImageBtn = personage.querySelector('.image-button');
        name.textContent = character.name;
        image.src = character.image;
        image.alt = character.name;
        status.textContent = `Status: ${character.status}`;
        characters.appendChild(personage);

        loadImageBtn.addEventListener('click', function(){
            image.style.display = 'block';
            loadImageBtn.style.display = 'none';
        })
        image.addEventListener('click', function(){
            image.style.display = 'none';
            loadImageBtn.style.display = 'block';
        })
    })
);




