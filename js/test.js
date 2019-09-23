console.log('hey');
console.log('test ' + uncoverwp_script_vars.template_directory);

if (document.getElementById('extra') !== null) {
    var switcher = document.getElementById('extra');
    switcher.innerText = uncoverwp_script_vars.template_directory;
    console.log(switcher);
    switcher.setAttribute("class", "hr-grid");
}