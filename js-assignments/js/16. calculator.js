let screen = document.getElementById("screen");
let buttons = document.getElementsByClassName("button");

let content = '';

for (const button of buttons) {
    button.addEventListener('click', () => {
        let curr = button.value;
        if (curr == 'X') {
            content += '*';
        }
        else if (curr == 'C') {
            content = '';
        }
        else if (curr == '=') {
            try {
                let res = eval(content);
                content = res;
            } catch (e) {
                content = '';
            }
        }
        else {
            content += curr;
        }
        screen.value = content;
    });
}