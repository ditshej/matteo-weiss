export default class MemoryGame {
    constructor() {
        this.board = document.querySelector(".board");
        this.clone = document.querySelector(".clone");
        this.matches = document.querySelector(".matches");
        this.tries = document.querySelector(".tries");
        this.overlay = document.querySelector(".overlay");
        this.reset = document.querySelector(".reset");
        this.gameoverTries = document.querySelector(".gameover-tries");
        this.gameoverMatches = document.querySelector(".gameover-matches");
        this.tileOptions = ["erupt", "ptero", "tri", "ahahah", "egg", "dino"];

        console.log(this.matches, this.tries);

        this.state = {
            selections: [],
            boardLocked: false,
            matches: 0,
            tries: 0
        };

        this.addEventListeners();
        this.createBoard();
    }


    addEventListeners() {
        this.reset.addEventListener("click", () => {
            if (this.state.boardLocked) return;
            this.resetGame();
        });
    }

    resetGame() {
        this.state.boardLocked = true;
        this.state.selections = [];
        this.state.matches = 0;
        this.state.tries = 0;
        this.matches.textContent = this.state.matches;
        this.tries.textContent = this.state.tries;

        document.querySelectorAll(".cube").forEach((tile) => {
            tile.removeEventListener("click", () => this.selectTile(tile));
            tile.remove();
        });

        this.overlay.classList.add("hidden");
        this.createBoard();
    }

    createBoard() {
        const tiles = this.shuffleArray([...this.tileOptions, ...this.tileOptions]);
        const length = tiles.length;

        for (let i = 0; i < length; i++) {
            window.setTimeout(() => {
                this.board.appendChild(this.buildTile(tiles.pop(), i));
            }, i * 100);
        }

        window.setTimeout(() => {
            document.querySelectorAll(".cube").forEach((tile) => {
                tile.addEventListener("click", () => this.selectTile(tile));
            });

            this.state.boardLocked = false;
        }, tiles.length * 100);
    }

    selectTile(tile) {
        if (this.state.boardLocked || tile.classList.contains("flipped")) return;

        this.state.boardLocked = true;

        if (this.state.selections.length <= 1) {
            tile.classList.add("flipped");
            this.state.selections.push({
                id: tile.dataset.id,
                tile: tile.dataset.tile,
                el: tile
            });
        }

        if (this.state.selections.length === 2) {
            this.state.tries = this.state.tries + 1;
            this.tries.textContent = this.state.tries;
            if (this.state.selections[0].tile === this.state.selections[1].tile) {
                window.setTimeout(() => {
                    this.state.selections[0].el.classList.add("matched");
                    this.state.selections[1].el.classList.add("matched");

                    this.state.boardLocked = false;
                    this.state.matches = this.state.matches + 1;
                    this.matches.textContent = this.state.matches;

                    if (this.state.matches === this.tileOptions.length) {
                        this.win();
                    }
                    this.state.selections = [];
                    document.querySelector(`.audio-${tile.dataset.tile}`).play();
                }, 600);
            } else {
                setTimeout(() => {
                    document.querySelectorAll(".cube").forEach((tile) => {
                        tile.classList.remove("flipped");
                    });
                    this.state.boardLocked = false;
                }, 800);
                this.state.selections = [];
            }
        } else {
            this.state.boardLocked = false;
        }
    }

    win() {
        window.setTimeout(() => {
            this.overlay.classList.remove("hidden");
            this.gameoverTries.textContent = this.state.tries;
            this.gameoverMatches.textContent = this.state.matches;
            document.querySelector(".audio-win").play();
        }, 600);
    }

    shuffleArray(param) {
        for (let i = param.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [param[i], param[j]] = [param[j], param[i]];
        }
        return param;
    }

    buildTile(pop, i) {
        const tile = this.clone.cloneNode(true);
        tile.classList.remove("clone");
        tile.classList.add("cube");
        tile.setAttribute("data-tile", pop);
        tile.setAttribute("data-id", i);
        return tile;
    }
}
