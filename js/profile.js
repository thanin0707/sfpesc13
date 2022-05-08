var b = false;
var x = false;

function toggle_visibility(id) {
    var e = document.getElementById(id);
    if(e.style.display == 'block') {
        e.style.display = 'none';
    } else {
        e.style.display = 'block';
    }
    b = true;
    x = false;
}

function foo() {
    if (!x) {
        bar();
    } else {
        x = false;
    }
}

function bar() {
    var e = document.getElementById('profile');
    if(!b) e.style.display = 'none';
    b=false;
}

function terminate_foo() {
    x = true;
    // setTimeout(re_foo, 150)
}

