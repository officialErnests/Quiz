let visible = 1;
let prev_visible = 1;
let div_finnish = document.getElementById("finnish")
let btn_backward = document.getElementById("backward")
let btn_foward = document.getElementById("foward")

function render(p_visible, p_prev_visible) {
    let temp_div = document.getElementById("q-" + p_prev_visible)
    if (temp_div != null)  {
        document.getElementById("q-" + p_prev_visible).style.display = "none";
    }
    document.getElementById("q-" + p_visible).style.display = "inherit";
}

render(1,1)

function foward() {
    visible += 1
    btn_backward.style.display = "inherit"
    if (document.getElementById("q-"+visible) == null) {
        div_finnish.style.display = "inherit"
        btn_foward.style.display = "none"
        console.log(prev_visible);
        document.getElementById("q-" + prev_visible).style.display = "none";
        prev_visible = visible
    } else {
        render(visible, prev_visible)
        prev_visible = visible
    }
}

function backward() {
    visible = Math.max(visible - 1, 1)
    div_finnish.style.display = "none"
    btn_foward.style.display = "inherit"
    render(visible, prev_visible)
    prev_visible = visible
    if (visible == 1) {
        btn_backward.style.display = "none"
    }
}