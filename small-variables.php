<?php
//create variables
$sg_porkherb = $_POST['sg_porkherb']; if($sg_porkherb == 'on'){$sg_porkherb=1;}else{$sg_porkherb=0;}
$t_porkherb = $_POST['t_porkherb'];
$sg_lambmint = $_POST['sg_lambmint']; if($sg_lambmint == 'on'){$sg_lambmint=1;}else{$sg_lambmint=0;}
$t_lambmint = $_POST['t_lambmint'];
$sg_bratwurst = $_POST['sg_bratwurst']; if($sg_bratwurst == 'on'){$sg_bratwurst=1;}else{$sg_bratwurst=0;}
$t_bratwurst = $_POST['t_bratwurst'];
$sg_spicyitalian = $_POST['sg_spicyitalian']; if($sg_spicyitalian == 'on'){$sg_spicyitalian=1;}else{$sg_spicyitalian=0;}
$t_spicyitalian = $_POST['t_spicyitalian'];
$sg_chorizo = $_POST['sg_chorizo']; if($sg_chorizo == 'on'){$sg_chorizo=1;}else{$sg_chorizo=0;}
$t_chorizo = $_POST['t_chorizo'];
$sg_tomatobasil = $_POST['sg_tomatobasil']; if($sg_tomatobasil == 'on'){$sg_tomatobasil=1;}else{$sg_tomatobasil=0;}
$t_tomatobasil = $_POST['t_tomatobasil'];
$sg_herbgarlic = $_POST['sg_herbgarlic']; if($sg_herbgarlic == 'on'){$sg_herbgarlic=1;}else{$sg_herbgarlic=0;}
$t_herbgarlic = $_POST['t_herbgarlic'];
$sg_peppersonion = $_POST['sg_peppersonion']; if($sg_peppersonion == 'on'){$sg_peppersonion=1;}else{$sg_peppersonion=0;}
$t_peppersonion = $_POST['t_peppersonion'];
$sg_gf_capsicum = $_POST['sg_gf_capsicum']; if($sg_gf_capsicum == 'on'){$sg_gf_capsicum=1;}else{$sg_gf_capsicum=0;}
$t_gf_capsicum = $_POST['t_gf_capsicum'];
$sg_plain = $_POST['sg_plain']; if($sg_plain == 'on'){$sg_plain=1;}else{$sg_plain=0;}
$t_plain = $_POST['t_plain'];
$sg_gf_plain = $_POST['sg_gf_plain']; if($sg_gf_plain == 'on'){$sg_gf_plain=1;}else{$sg_gf_plain=0;}
$t_gf_plain = $_POST['t_gf_plain'];
$sg_saveloys = $_POST['sg_saveloys']; if($sg_saveloys == 'on'){$sg_saveloys=1;}else{$sg_saveloys=0;}
$t_saveloys = $_POST['t_saveloys'];
$sg_create = $_POST['sg_create']; if($sg_create == 'on'){$sg_create=1;}else{$sg_create=0;}
$t_create = $_POST['t_create'];
$sg_patties = $_POST['sg_patties']; if($sg_patties == 'on'){$sg_patties=1;}else{$sg_patties=0;}
$t_patties = $_POST['t_patties'];
$sg_gf_patties = $_POST['sg_gf_patties']; if($sg_gf_patties == 'on'){$sg_gf_patties=1;}else{$sg_gf_patties=0;}
$t_gf_patties = $_POST['t_gf_patties'];
$sg_salami = $_POST['sg_salami']; if($sg_salami == 'on'){$sg_salami=1;}else{$sg_salami=0;}
$t_salami = $_POST['t_salami'];
$salami_t = $_POST['salami_t'];
$salami_s = $_POST['salami_s'];

//update where id comes from url
$sql = "UPDATE meatorders SET

    sg_porkherb='$sg_porkherb',
    t_porkherb='$t_porkherb',
    sg_lambmint='$sg_lambmint',
    t_lambmint='$t_lambmint',
    sg_bratwurst='$sg_bratwurst',
    t_bratwurst='$t_bratwurst',
    sg_spicyitalian='$sg_spicyitalian',
    t_spicyitalian='$t_spicyitalian',
    sg_chorizo='$sg_chorizo',
    t_chorizo='$t_chorizo',
    sg_tomatobasil='$sg_tomatobasil',
    t_tomatobasil='$t_tomatobasil',
    sg_herbgarlic='$sg_herbgarlic',
    t_herbgarlic='$t_herbgarlic',
    sg_peppersonion='$sg_peppersonion',
    t_peppersonion='$t_peppersonion',
    sg_gf_capsicum='$sg_gf_capsicum',
    t_gf_capsicum='$t_gf_capsicum',
    sg_plain='$sg_plain',
    t_plain='$t_plain',
    sg_gf_plain='$sg_gf_plain',
    t_gf_plain='$t_gf_plain',
    sg_saveloys='$sg_saveloys',
    t_saveloys='$t_saveloys',
    sg_create='$sg_create',
    t_create='$t_create',
    sg_patties='$sg_patties',
    t_patties='$t_patties',
    sg_gf_patties='$sg_gf_patties',
    t_gf_patties='$t_gf_patties',
    sg_salami='$sg_salami',
    t_salami='$t_salami',
    salami_t='$salami_t',
    salami_s='$salami_s'
    
    WHERE unid=$unid";
    
    ?>