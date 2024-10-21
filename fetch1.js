const url = 'https://swapi.dev/api/people/';

fetch(url).then(data => data.json()).then(data => 
    console.log(data));

console.log(111111);