const template = document.getElementById("template").innerHTML;
const content = document.getElementById("games");
const modal = document.getElementById("modal");
const modalTemplate = document.getElementById("modal-template").innerHTML;
let gameId = 0;

class Game {
    constructor(title, img, oscar, link, desc, team) {
        this.id = gameId++;
        this.title = title;
        this.img = img;
        this.oscar = oscar;
        this.link = link;
        this.desc = desc;
        this.team = team;
    }
}

class User {
    constructor(name, functions, link = null) {
        this.name = name;
        this.functions = functions;
        this.link = link;
    }
}


let gamesMap = {};

function init() {
    gamesMap = {};
    for (let game of games) {
        gamesMap[game.id] = game;
        let div = document.createElement("div");
        div.className = "game";
        div.innerHTML = fill(template, game);
        content.appendChild(div);
    }
}

function display(id) {
    let game = gamesMap[id];
    modal.innerHTML = fill(modalTemplate, game);
    modal.style.display = "block";
}

function closeModal() {
    modal.style.display = "none";
}

function fill(template, object) {
    let data = template;

    data = data.replace(
        /{{for ([a-zA-Z]+) in ([a-zA-Z]+)}}(.*){{endfor}}/gs,
        (o, variable, list, content) => {
            let str = '';
            for (let v of object[list])
                str += fill(content.replaceAll(`{{${variable}.`, '{{'), v);
            return str;
        }
    );

    data = data.replace(
        /{{([a-zA-Z]+)}}/g,
        (o, p) => object[p] !== undefined ? object[p] : "");
    return data;
}