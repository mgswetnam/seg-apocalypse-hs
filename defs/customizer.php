<?php
$customizer = array( // Panels
  "seg-customizer-options" => array(
    "ptitle" => "SEG Options",
    "pdomain" => "seg-theme",
    "pcapability" => "edit_theme_options",
    "psections" => array( // Sections
      "seg-theme-header" => array(
        "stitle" => "Header Elements",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Additional elements to add to the header for clients",
        "sfields" => array( // Fields
          "seg_textarea_highest" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Highest Code",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_highest_code",
            "fattributes" => array(
              "placeholder" => "As close as you can get to the top.",
              "rows" => "10",
              "wrap" => "off"
            )
          ),
          "seg_textarea_prefetch" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Prefetch URLs",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_prefetch_urls",
            "fattributes" => array(
              "placeholder" => "Adds DNS Prefetch tags (DNS). One per line.",
              "rows" => "10",
              "wrap" => "off"
            )
          ),
          "seg_textarea_preconnect" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Preconnect URLs",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_preconnect_urls",
            "fattributes" => array(
              "placeholder" => "Adds preconnect tags (DNS + TCP + TLS). One per line.",
              "rows" => "10",
              "wrap" => "off"
            )
          ),
          "seg_textarea_preload" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Preload Resources",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_preload_resources",
            "fattributes" => array(
              "placeholder" => "Adds preload tags. One per line.",
              "rows" => "10",
              "wrap" => "off"
            )
          )
        ) // End Fields
      ),
      "seg-theme-tracking" => array(
        "stitle" => "Tracking Sources",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Specific tracking resources you can choose to implement.",
        "sfields" => array( // Fields
          "seg_radio_facebook" => array(
            "fdefault" => "no",
            "fcapability" => "edit_theme_options",
            "flabel" => "Facebook Pixel",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "radio",
            "fsettings" => "seg_radio_facebook",
            "fchoices" => array(
              "yes" => "Yes",
              "no" => "No"
            )
          ),
          "seg_textarea_fbpixelcode" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Facebook Pixel Code",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "textarea",
            "fsettings" => "seg_tracking_fbpixelcode",
            "fattributes" => array(
              "placeholder" => "Use %s to mark where additional tags should go. ",
              "rows" => "10",
              "wrap" => "off"
            )
          )
        ) // End Fields
      ),
      "seg-theme-heading" => array(
        "stitle" => "Heading Settings",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Settings for the page heading.",
        "sfields" => array( // Fields
          "seg_default_title_image" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Default Image",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "imagecontrol",
            "fsettings" => "seg_default_title_image",
            "fattributes" => array(
              "placeholder" => "Default image for the page title background",
              "rows" => "10",
              "wrap" => "off"
            )
          )
        ) // End Fields
      ),
      "seg-theme-resources" => array(
        "stitle" => "Additional Resources",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Additional resources you can opt to include.",
        "sfields" => array( // Fields
          "seg_checkbox_bootstrap" => array(
            "fdefault" => "no",
            "fcapability" => "edit_theme_options",
            "flabel" => "Include Bootstrap",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "radio",
            "fsettings" => "seg_include_bootstrap",
            "fchoices" => array(
              "yes" => "Yes",
              "no" => "No"
            )
          ),
          "seg_checkbox_fontawesome" => array(
            "fdefault" => "no",
            "fcapability" => "edit_theme_options",
            "flabel" => "Include FontAwesome",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "radio",
            "fsettings" => "seg_include_fontawesome",
            "fchoices" => array(
              "yes" => "Yes",
              "no" => "No"
            )
          )
        ) // End Fields
      ),
      "seg-theme-costcalc" => array(
        "stitle" => "Cost Calculator",
        "sdomain" => "seg-theme",
        "spriority" => 115,
        "scapability" => "edit_theme_options",
        "sdescription" => "Variables to calculate web project cost.",
        "sfields" => array( // Fields
          "seg_text_calc_hourlyrate" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Hourly Rate",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_hourlyrate",
            "fattributes" => array(
              "placeholder" => "Round to dollar amount"
            )
          ),
          "seg_text_calc_imagerate" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Image Rate",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_imagerate",
            "fattributes" => array(
              "placeholder" => "Shutterstock image cost"
            )
          ),
          "seg_text_calc_timebase" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Base Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_basetime",
            "fattributes" => array(
              "placeholder" => "Time it takes for basic setup (header and footer)"
            )
          ),
          "seg_text_calc_timepagetemp" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Page Temp Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_timepagetemp",
            "fattributes" => array(
              "placeholder" => "Time it takes per template"
            )
          ),
          "seg_text_calc_timepagebuild" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Page Build Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_timepagebuild",
            "fattributes" => array(
              "placeholder" => "Time it takes to build the average page"
            )
          ),
          "seg_text_calc_timecontent" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Page Content Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_timecontent",
            "fattributes" => array(
              "placeholder" => "Time it takes to write page content (per page)"
            )
          ),
          "seg_text_calc_timesocial" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Social Media Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_timesocial",
            "fattributes" => array(
              "placeholder" => "Time it takes add social media share"
            )
          ),
          "seg_text_calc_timeanalytics" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Google Analytics Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_timeanalytics",
            "fattributes" => array(
              "placeholder" => "Time it takes to install Google Analytics"
            )
          ),
          "seg_text_calc_timenewsletter" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Newsletter Signup Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_timenewsletter",
            "fattributes" => array(
              "placeholder" => "Time it takes to newsletter signup"
            )
          ),
          "seg_text_calc_timestoresetup" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Store Setup Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_timestoresetup",
            "fattributes" => array(
              "placeholder" => "Time it takes to set up an ecommerce web store"
            )
          ),
          "seg_text_calc_timestoreitem" => array(
            "fdefault" => "",
            "fcapability" => "edit_theme_options",
            "flabel" => "Store Item Time",
            "fdomain" => "seg-theme",
            "fstype" => "option",
            "ftype" => "text",
            "fsettings" => "seg_calc_timestoreitem",
            "fattributes" => array(
              "placeholder" => "Time it takes to set up items in store"
            )
          ),
        ) // End Fields
      )
    )
  )
);
?>
