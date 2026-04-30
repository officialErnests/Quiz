let visible = 1;
let prev_visible = 1;
let div_finnish = document.getElementById("finnish");
let btn_backward = document.getElementById("backward");
let btn_foward = document.getElementById("foward");
let ptg_tracker = document.getElementById("tracker");
const PROGRESS_LENGTH = 20

function render(p_visible, p_prev_visible) {
    render_progress()
    let temp_div = document.getElementById("q-" + p_prev_visible);
    if (temp_div != null)  {
        document.getElementById("q-" + p_prev_visible).style.display = "none";
    }
    document.getElementById("q-" + p_visible).style.display = "inherit";
}
function foward() {
    visible += 1
    btn_backward.style.display = "inherit";
    if (document.getElementById("q-"+visible) == null) {
        render_progress()
        div_finnish.style.display = "inherit";
        btn_foward.style.display = "none";
        console.log(prev_visible);
        document.getElementById("q-" + prev_visible).style.display = "none";
        prev_visible = visible;
    } else {
        render(visible, prev_visible);
        prev_visible = visible;
    }
}
function backward() {
    visible = Math.max(visible - 1, 1);
    div_finnish.style.display = "none";
    btn_foward.style.display = "inherit";
    render(visible, prev_visible);
    prev_visible = visible;
    if (visible == 1) {
        btn_backward.style.display = "none";
    }
}
function get_questions() {
    for (let index = 1; index < 101; index++) {
        if (document.getElementById("q-"+index) == null) {
            return index - 1;
        }
    }
}
function render_progress() {
    let t_value = Math.floor((Math.max(Math.min(visible, max_questions), 1) / max_questions) * PROGRESS_LENGTH);
    ptg_tracker.innerText = "[" + "#".repeat(t_value) + "+".repeat(PROGRESS_LENGTH - t_value) + "] " + Math.min(visible, max_questions) + "/" + max_questions;
    
}

let max_questions = get_questions();
render(1,1)