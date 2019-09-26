// hack way of updating a php variable into a js gutenberg block
if (document.getElementById('extra') !== null) {
    var switcher = document.getElementById('extra');
    switcher.innerText = uncoverwp_script_vars.template_directory;
    console.log(switcher);
    switcher.setAttribute("class", "hr-grid");
}