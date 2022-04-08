
var simplemaps_worldmap_mapdata={
  main_settings: {
    //General settings
		width: "responsive", //or 'responsive'
    background_color: "FFFFFF",
    background_transparent: "yes", // (ça faut laisser en yes parce que sinon ça affiche des trucs derriere la map et c'est moche)
    popups: "detect", //(ça c'est quand t'es sur mobile pour que ca detecte directement et que la navigation soit plus simple)
    
		//State defaults
		state_description: "State description", //(petit texte qui s'affiche dans le popup) 
    state_color: "#25CEE2",
    state_hover_color: "#C70039",
    state_url: "TraceurGraphe.php", //(renvoi vers ce lien quand on clique sur un pays, changer ça par un lien qui renvoie vers une courbe, graphique, etc..., mais la j'ai juste mis le lien vers le fb addictab)
    border_size: 1.5,
    border_color: "#1E1E1E",
    all_states_inactive: "no", //(c'est la de base, ça peut servir mais en vrai on s'en fout, pareil pour tout les autres, hidden, zoomable, etc...)
    all_states_zoomable: "no",
    
		
    
		//Label defaults (je sais pas trop ce que ça fait mais ça à l'air important)
		label_color: "#ffffff",
    label_hover_color: "#ffffff",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
   
		//Zoom settings (réglages du zoom ne pas toucher)
		manual_zoom: "yes",
    back_image: "no",
    arrow_box: "no",
    navigation_size: "40",
    navigation_color: "#f7f7f7",
    navigation_border_color: "#636363",
    initial_back: "no",
    initial_zoom: -1,
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
		//Popup settings (du coup ça gère les bulles de texte avec state et location description, les popup litteralement)
		popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
		//Advanced settings (ça c'est des réglages qui peuvent servir mais en vrai on va juste laisser comme ça)
		div: "map",
    auto_load: "yes",
    rotate: "0",
    url_new_tab: "yes", // (celui est important, en gros quand on clique sur un pays ça ouvre une autre page au lieu de modifier celle sur laquelle on est)
    images_directory: "default",
    import_labels: "no",
    fade_time: 0.1,
    link_text: "View Website"
  },
  // (tout ça c'est les pays et putain il y en a beaucoup)
  state_specific: {
    AF: {
      name: "Afghanistan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AF"
    },
    AO: {
      name: "Angola",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AO"
    },
    AL: {
      name: "Albania",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AL"
    },
    AE: {
      name: "United Arab Emirates",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AE"
    },
    AR: {
      name: "Argentina",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AR"
    },
    AM: {
      name: "Armenia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AM"
    },
    AU: {
      name: "Australia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AU"
    },
    AT: {
      name: "Austria",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AT"
    },
    AZ: {
      name: "Azerbaijan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AZ"
    },
    BI: {
      name: "Burundi",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BI"
    },
    BE: {
      name: "Belgium",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BE"
    },
    BJ: {
      name: "Benin",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BJ"
    },
    BF: {
      name: "Burkina Faso",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BF"
    },
    BD: {
      name: "Bangladesh",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BD"
    },
    BG: {
      name: "Bulgaria",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BG"
    },
    BH: {
      name: "Bahrain",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BH"
    },
    BA: {
      name: "Bosnia and Herzegovina",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AF"
    },
    BY: {
      name: "Belarus",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BY"
    },
    BZ: {
      name: "Belize",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BZ"
    },
    BO: {
      name: "Bolivia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BO"
    },
    BR: {
      name: "Brazil",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BR"
    },
    BN: {
      name: "Brunei Darussalam",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BN"
    },
    BT: {
      name: "Bhutan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BT"
    },
    BW: {
      name: "Botswana",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BW"
    },
    CF: {
      name: "Central African Republic",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CF"
    },
    CA: {
      name: "Canada",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CA"
    },
    CH: {
      name: "Switzerland",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CH"
    },
    CL: {
      name: "Chile",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CL"
    },
    CN: {
      name: "China",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CN"
    },
    CI: {
      name: "Côte d'Ivoire",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CI"
    },
    CM: {
      name: "Cameroon",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CM"
    },
    CD: {
      name: "Democratic Republic of the Congo",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CD"
    },
    CG: {
      name: "Republic of Congo",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CG"
    },
    CO: {
      name: "Colombia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CO"
    },
    CR: {
      name: "Costa Rica",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CR"
    },
    CU: {
      name: "Cuba",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CU"
    },
    CZ: {
      name: "Czech Republic",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CZ"
    },
    DE: {
      name: "Germany",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=DE"
    },
    DJ: {
      name: "Djibouti",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=DJ"
    },
    DK: {
      name: "Denmark",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=DK"
    },
    DO: {
      name: "Dominican Republic",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=DO"
    },
    DZ: {
      name: "Algeria",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=DZ"
    },
    EC: {
      name: "Ecuador",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=EC"
    },
    EG: {
      name: "Egypt",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=EG"
    },
    ER: {
      name: "Eritrea",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ER"
    },
    EE: {
      name: "Estonia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=EE"
    },
    ET: {
      name: "Ethiopia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ET"
    },
    FI: {
      name: "Finland",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=FI"
    },
    FJ: {
      name: "Fiji",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=FJ"
    },
    GA: {
      name: "Gabon",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GA"
    },
    GB: {
      name: "United Kingdom",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GB"
    },
    GE: {
      name: "Georgia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GE"
    },
    GH: {
      name: "Ghana",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GH"
    },
    GN: {
      name: "Guinea",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GN"
    },
    GM: {
      name: "The Gambia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GM"
    },
    GW: {
      name: "Guinea-Bissau",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GW"
    },
    GQ: {
      name: "Equatorial Guinea",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GQ"
    },
    GR: {
      name: "Greece",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GR"
    },
    GL: {
      name: "Greenland",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GL"
    },
    GT: {
      name: "Guatemala",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GT"
    },
    GY: {
      name: "Guyana",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GY"
    },
    HN: {
      name: "Honduras",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=HN"
    },
    HR: {
      name: "Croatia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=HR"
    },
    HT: {
      name: "Haiti",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=HT"
    },
    HU: {
      name: "Hungary",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=HU"
    },
    ID: {
      name: "Indonesia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ID"
    },
    IN: {
      name: "India",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=IN"
    },
    IE: {
      name: "Ireland",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=IE"
    },
    IR: {
      name: "Iran",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=IR"
    },
    IQ: {
      name: "Iraq",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=IQ"
    },
    IS: {
      name: "Iceland",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=IS"
    },
    IL: {
      name: "Israel",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=IL"
    },
    IT: {
      name: "Italy",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=IT"
    },
    JM: {
      name: "Jamaica",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=JM"
    },
    JO: {
      name: "Jordan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=JO"
    },
    JP: {
      name: "Japan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=JP"
    },
    KZ: {
      name: "Kazakhstan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KZ"
    },
    KE: {
      name: "Kenya",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KE"
    },
    KG: {
      name: "Kyrgyzstan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KG"
    },
    KH: {
      name: "Cambodia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KH"
    },
    KR: {
      name: "Republic of Korea",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KR"
    },
    XK: {
      name: "Kosovo",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=XK"
    },
    KW: {
      name: "Kuwait",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KW"
    },
    LA: {
      name: "Lao PDR",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LA"
    },
    LB: {
      name: "Lebanon",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LB"
    },
    LR: {
      name: "Liberia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LR"
    },
    LY: {
      name: "Libya",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LY"
    },
    LK: {
      name: "Sri Lanka",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LK"
    },
    LS: {
      name: "Lesotho",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LS"
    },
    LT: {
      name: "Lithuania",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LT"
    },
    LU: {
      name: "Luxembourg",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LU"
    },
    LV: {
      name: "Latvia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LV"
    },
    MA: {
      name: "Morocco",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AF"
    },
    MD: {
      name: "Moldova",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MD"
    },
    MG: {
      name: "Madagascar",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MG"
    },
    MX: {
      name: "Mexico",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MX"
    },
    MK: {
      name: "Macedonia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MK"
    },
    ML: {
      name: "Mali",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ML"
    },
    MM: {
      name: "Myanmar",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MM"
    },
    ME: {
      name: "Montenegro",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ME"
    },
    MN: {
      name: "Mongolia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MN"
    },
    MZ: {
      name: "Mozambique",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MZ"
    },
    MR: {
      name: "Mauritania",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MR"
    },
    MW: {
      name: "Malawi",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MW"
    },
    MY: {
      name: "Malaysia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MY"
    },
    NA: {
      name: "Namibia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NA"
    },
    NE: {
      name: "Niger",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NE"
    },
    NG: {
      name: "Nigeria",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NG"
    },
    NI: {
      name: "Nicaragua",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NI"
    },
    NL: {
      name: "Netherlands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NL"
    },
    NO: {
      name: "Norway",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NO"
    },
    NP: {
      name: "Nepal",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NP"
    },
    NZ: {
      name: "New Zealand",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NZ"
    },
    OM: {
      name: "Oman",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=OM"
    },
    PK: {
      name: "Pakistan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PK"
    },
    PA: {
      name: "Panama",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PA"
    },
    PE: {
      name: "Peru",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PE"
    },
    PH: {
      name: "Philippines",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PH"
    },
    PG: {
      name: "Papua New Guinea",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PG"
    },
    PL: {
      name: "Poland",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PL"
    },
    KP: {
      name: "Dem. Rep. Korea",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KP"
    },
    PT: {
      name: "Portugal",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PT"
    },
    PY: {
      name: "Paraguay",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PY"
    },
    PS: {
      name: "Palestine",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PS"
    },
    QA: {
      name: "Qatar",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=QA"
    },
    RO: {
      name: "Romania",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=RO"
    },
    RU: {
      name: "Russia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=RU"
    },
    RW: {
      name: "Rwanda",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=RW"
    },
    EH: {
      name: "Western Sahara",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=EH"
    },
    SA: {
      name: "Saudi Arabia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SA"
    },
    SD: {
      name: "Sudan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SD"
    },
    SS: {
      name: "South Sudan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SS"
    },
    SN: {
      name: "Senegal",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SN"
    },
    SL: {
      name: "Sierra Leone",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SL"
    },
    SV: {
      name: "El Salvador",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SV"
    },
    RS: {
      name: "Serbia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=RS"
    },
    SR: {
      name: "Suriname",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SR"
    },
    SK: {
      name: "Slovakia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SK"
    },
    SI: {
      name: "Slovenia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SI"
    },
    SE: {
      name: "Sweden",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SE"
    },
    SZ: {
      name: "Swaziland",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SZ"
    },
    SY: {
      name: "Syria",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SY"
    },
    TD: {
      name: "Chad",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TD"
    },
    TG: {
      name: "Togo",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TG"
    },
    TH: {
      name: "Thailand",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TH"
    },
    TJ: {
      name: "Tajikistan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TJ"
    },
    TM: {
      name: "Turkmenistan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TM"
    },
    TL: {
      name: "Timor-Leste",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TL"
    },
    TN: {
      name: "Tunisia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TN"
    },
    TR: {
      name: "Turkey",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TR"
    },
    TW: {
      name: "Taiwan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TW"
    },
    TZ: {
      name: "Tanzania",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TZ"
    },
    UG: {
      name: "Uganda",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=UG"
    },
    UA: {
      name: "Ukraine",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=UA"
    },
    UY: {
      name: "Uruguay",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=UY"
    },
    US: {
      name: "United States",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=US"
    },
    UZ: {
      name: "Uzbekistan",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=UZ"
    },
    VE: {
      name: "Venezuela",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=VE"
    },
    VN: {
      name: "Vietnam",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=VN"
    },
    VU: {
      name: "Vanuatu",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=VU"
    },
    YE: {
      name: "Yemen",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=YE"
    },
    ZA: {
      name: "South Africa",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ZA"
    },
    ZM: {
      name: "Zambia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ZM"
    },
    ZW: {
      name: "Zimbabwe",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ZW"
    },
    SO: {
      name: "Somalia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SO"
    },
    GF: {
      name: "France",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GF"
    },
    FR: {
      name: "France",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=FR"
    },
    ES: {
      name: "Spain",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ES"
    },
    AW: {
      name: "Aruba",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AW"
    },
    AI: {
      name: "Anguilla",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AI"
    },
    AD: {
      name: "Andorra",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AD"
    },
    AG: {
      name: "Antigua and Barbuda",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=AG"
    },
    BS: {
      name: "Bahamas",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BS"
    },
    BM: {
      name: "Bermuda",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BM"
    },
    BB: {
      name: "Barbados",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=BB"
    },
    KM: {
      name: "Comoros",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KM"
    },
    CV: {
      name: "Cape Verde",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CV"
    },
    KY: {
      name: "Cayman Islands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KY"
    },
    DM: {
      name: "Dominica",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=DM"
    },
    FK: {
      name: "Falkland Islands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=FK"
    },
    FO: {
      name: "Faeroe Islands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=FO"
    },
    GD: {
      name: "Grenada",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GD"
    },
    HK: {
      name: "Hong Kong",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=HK"
    },
    KN: {
      name: "Saint Kitts and Nevis",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=KN"
    },
    LC: {
      name: "Saint Lucia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LC"
    },
    LI: {
      name: "Liechtenstein",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=LI"
    },
    MF: {
      name: "Saint Martin (French)",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MF"
    },
    MV: {
      name: "Maldives",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MV"
    },
    MT: {
      name: "Malta",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MT"
    },
    MS: {
      name: "Montserrat",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MS"
    },
    MU: {
      name: "Mauritius",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MU"
    },
    NC: {
      name: "New Caledonia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NC"
    },
    NR: {
      name: "Nauru",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=NR"
    },
    PN: {
      name: "Pitcairn Islands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PN"
    },
    PR: {
      name: "Puerto Rico",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PR"
    },
    PF: {
      name: "French Polynesia",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=PF"
    },
    SG: {
      name: "Singapore",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SG"
    },
    SB: {
      name: "Solomon Islands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SB"
    },
    ST: {
      name: "São Tomé and Principe",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=ST"
    },
    SX: {
      name: "Saint Martin (Dutch)",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SX"
    },
    SC: {
      name: "Seychelles",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=SC"
    },
    TC: {
      name: "Turks and Caicos Islands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TC"
    },
    TO: {
      name: "Tonga",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TO"
    },
    TT: {
      name: "Trinidad and Tobago",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=TT"
    },
    VC: {
      name: "Saint Vincent and the Grenadines",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=VC"
    },
    VG: {
      name: "British Virgin Islands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=VG"
    },
    VI: {
      name: "United States Virgin Islands",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=VI"
    },
    CY: {
      name: "Cyprus",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CY"
    },
    RE: {
      name: "Reunion (France)",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=RE"
    },
    YT: {
      name: "Mayotte (France)",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=YT"
    },
    MQ: {
      name: "Martinique (France)",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=MQ"
    },
    GP: {
      name: "Guadeloupe (France)",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=GP"
    },
    CW: {
      name: "Curaco (Netherlands)",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=CW"
    },
    IC: {
      name: "Canary Islands (Spain)",
      description: "default",
      color: "default",
      hover_color: "default",
      url: "TraceurGraphe.php?region=IC"
    }
  },
  //(ça c'est les points rose si on veut modifier l'emplacement)
  locations: {
    "0": {
      name: "Paris",
      lat: "48.866666670",
      lng: "2.333333333",
      color: "default",
      description: "default",
      url: "default"
    },
    "1": {
      name: "Tokyo",
      lat: "35.666666670",
      lng: "139.750000000",
      color: "default",
      description: "default",
      url: "default"
    },
    "2": {
      name: "New York",
      lat: "40.71",
      lng: "-74.0059731",
      description: "default",
      color: "default",
      url: "default",
      size: "default"
    }
  },
  labels: {} //(pareil ce truc ça doit justement permettre d'afficher les labels mais vu que je sais pas trop comment ça marche je préfère le laisser)
};
