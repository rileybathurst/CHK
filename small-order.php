<!-- extra jquery needed for validation -->        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        
<!-- validation of checked -->
        <script>
            // validates only if selected when checked
            jQuery.validator.setDefaults();
            $( "#small-order" ).validate({
              rules: {
// sg_porkherb t_porkherb                
                  t_porkherb: { required: "#sg_porkherb:checked" },
// sg_lambmint t_lambmint                
                  t_lambmint: { required: "#sg_lambmint:checked" },
// sg_bratwurst t_bratwurst
                  t_bratwurst: { required: "#sg_bratwurst:checked" },
// sg_spicyitalian t_spicyitalian                
                  t_spicyitalian: { required: "#sg_spicyitalian:checked" },
// sg_chorizo t_chorizo                
                  t_chorizo: { required: "#sg_chorizo:checked" },
// sg_tomatobasil t_tomatobasil                
                  t_tomatobasil: { required: "#sg_tomatobasil:checked" },
// sg_herbgarlic t_herbgarlic                
                  t_herbgarlic: { required: "#sg_herbgarlic:checked" },
// sg_peppersonion t_peppersonion                
                  t_peppersonion: { required: "#sg_peppersonion:checked" },
// sg_gf_capsicum t_gf_capsicum                
                  t_gf_capsicum: { required: "#sg_gf_capsicum:checked" },
// sg_plain t_plain                
                  t_plain: { required: "#sg_plain:checked" },
// sg_gf_plain t_gf_plain                
                  t_gf_plain: { required: "#sg_gf_plain:checked" },
// sg_saveloys t_saveloys                
                  t_saveloys: { required: "#sg_saveloys:checked" },
// sg_create t_create                
                  t_create: { required: "#sg_create:checked" },
// sg_patties t_patties                
                  t_patties: { required: "#sg_patties:checked" },
// sg_gf_patties t_gf_patties                
                  t_gf_patties: { required: "#sg_gf_patties:checked" },
// sg_salami t_salami salami_t salami_s                
                  t_salami: { required: "#sg_salami:checked" },
                  salami_t: { required: "#sg_salami:checked" },
                  salami_s: { required: "#sg_salami:checked" }
              }
            });
        </script>