-- Active: 1695210448529@@127.0.0.1@3306@magic_form_romilly_sur_seine
INSERT INTO `produits` (
    nom,
    categorie_id,
    sous_titre,
    prix,
    stock,
    description,
    image
) VALUES
    (   -- Catégorie "Performance"
        "Born of Rage Ultimate - Préworkout sans créatine", 
        1,
        "Pre-Workout explosif pour des entraînements intensifs",
        33.00,
        10,
        "BORN OF RAGE ULTIMATE est un puissant PRE-WORKOUT sans créatine. Un cocktail unique pour repousser vos limites1, rester concentré2, explosif1 et endurant1 tout au long de votre séance !
        Avec 3g de Beta-Alanine et 2g de Citrulline, Born of Rage Ultimate vous apportera tous les effets que vous attendez d'un pre-workout.
        Zynamite® est un actif breveté et testé cliniquement par 3 études, et récompensé avec son 1er prix au Nutra Ingredient Award dans la catégorie Nutrition Sportive. Le remplaçant idéal de la caféine de haute qualité et particulièrement renommé !
        Avec son arôme frais et naturel de poire, dégustez une dose de motivation avant chaque training pour repousser vos limites !",
        "Born_Rage_Ultimate-min"
    ),
    (
        "Born of Rage Ultimate - Explosive Préworkout", 
        1,
        "Explosive preworkout - Performance",
        13.50,
        10,
        "BORN OF RAGE du Laboratoire Eric Favre® est un puissant PRE-WORKOUT en poudre composé d'un cokctail explosif de 11 ingrédients sélectionnés pour vous assurer des trainings explosifs et intenses dont la vitamine B3 qui contribue à un métabolisme énergétique normal et au fonctionnement normal du système nerveux.
        Energie & explosivité, Endurance, Concentration",
        "Born_Rage-min"
    ),
    (
        "Créatine Monohydrate 3000mg", 
        1,
        "La Créatine, un acide aminé semi-essentiel pour vos performances physiques !",
        20.90,
        10,
        "La créatine monohydrate est un acide aminé non essentiel et précurseur de l'ATP (Adénosine Triphosphate). La créatine améliore les capacités physiques en cas de séries successives d'exercices très intenses de courte durée. L'effet bénéfique est obtenu par la consommation journalière de 3g de créatine. La créatine du laboratoire Eric Favre est d'origine vegan et est dosée à 3000mg par jour pour vous permettre de performer.",
        "Creatine_3000mg"
    ),
    (
        "Pure Creatine - Créatine Pro Zero", 
        1,
        "Creatine Pro Zero améliore les capacités physiques sur séries d'exercices intenses",
        19.90,
        10,
        "La créatine est un dérivé d'acides aminés que l'on trouve principalement dans la viande et le poisson. L'organisme la produit en fonction de ses besoins. Elle se trouve à 95% dans les muscles squelettiques et est synthétisée dans les reins, le foie et le pancréas.
        La créatine est très utilisée dans le monde du sport (body, fitness) car elle améliore les capacités physiques en cas de séries successives d'exercices très intenses de courte durée, effet bénéfique obtenu par la consommation journalière de 3g de créatine.    ",
        "Creatine_Pro_Zero-min"
    ),
    (
        "Iron Performance E.A.A", 
        1,
        "Iron Performance vous permet d'améliorer vos performances et de repousser vos limites",
        46.00,
        10,
        "La gamme Iron Series E.A.A (acides aminés essentiels) est une exclusivité mondiale du Laboratoire Eric Favre® grâce à la présence d'un ingrédient exclusif issu d'une technologie de pointe unique au monde : La Biaminoée ™.
        C'est un concentré exclusif de dipeptides, molécules à base d'acides aminés de qualité plasmatique pour une assimilation optimale & fer héminique, fer le plus assimilable par le corps.
        Biaminoée™ est scientifiquement testé.
        Le fer contribue présent dans Iron Performance aide à réduire la fatigue et au transport normal de l'oxygène dans l'organisme et à une synthèse protéique normale.
        Votre métabolisme sera boosté et plus performant en gagnant en endurance et en énergie, agissant notamment sur l'oxygénation cellulaire et ayant une action sur vos muscles.",
        "Iron_Performance-min"
    ),
    (
        "Boisson testorine", 
        1,
        "Saveur Orange pour Preworkout",
        20,
        10,
        "Testorine booster est la boisson qui vous accompagnera tout au long de vos trainings pour booster vos performances.
        Cette boisson est un véritable cocktail explosif composé de tribulus terrestis, de guarana, d'acérola, de caféine et de vitamine C qui contribue à réduire la fatigue.
        Son bon goût orange fera de ce preworkout prêt à boire votre nouveau compagnon d'entraînements.",
        "Testorine_Booster_Orange-min"
    ),
    (
        "Turbo Testo - Pro Series", 
        1,
        "Gagnez en performance et endurance avec Turbo Testo Pro Series",
        20,
        10,
        "Turbo Testo2 Pro Series est un complément alimentaire composé de 11 actifs pour une puissance maximale.
        Une formule exclusive développée par notre laboratoire et unique sur son marché.
        Stimulateur de performance1, Turbo Testo Pro Series participe également au maintien du tonus du corps, des muscles et des niveaux d'énergie.",
        "Turbo_Testo-min"
    ),
    (   -- Catégorie "Perte de poids"
        "Brûleur De Graisse Iron Ultra Fat Burner", 
        2,
        "Gagnez en performance et endurance avec Turbo Testo Pro Series",
        20,
        10,
        "La gamme Iron Series E.A.A (acides aminés essentiels) est une exclusivité mondiale du Laboratoire Eric Favre® grâce à la présence d'un ingrédient exclusif issu d'une technologie de pointe unique au monde : La Biaminoée™.
        C'est un concentré exclusif de dipeptides, molécules à base d'acides aminés de qualité plasmatique pour une assimilation optimale & fer héminique, fer le plus assimilable par le corps.
        Iron Ultra Fat Burner, bruleur de graisse est composé, entre autre, d'extrait de thé vert qui contribue au métabolisme et inhibe la catéchol-Ométhyltransférase, enzyme participant à la thermogénèse corporelle (brûle graisse).
        Ainsi, vous retrouverez une silhouette affinée et sculptée grâce à l'élimination et au destockage des graisses incrustées. Le fer aidant à réduire la fatigue, il vous permettra de garder votre énergie.",
        "Iron_Ultra_Fat_Burner-min"
    ),
    (
        "Coffret Lipoxycut Vegan - Brûleur de graisses", 
        2,
        "Lipoxycut Vegan brûle les graisses, sculpte et affine la silhouette",
        42.50,
        10,
        "POUR DES RESULTATS 100% PLAISIR !
        L'association de 19 ingrédients sélectionnés est au service d'un produit complet qui agit de façon globale sur la perte de poids1:
        • Draine1, élimine1 et détoxifie2 au même titre qu'une water détox
        • Action minceur1: action sur les graisses et glucides5
        • Dessine la silhouette3 : affine1 et sculpte3
        • Tonus & Bien-être4",
        "Lipoxycut_Fruits_Rouges-min"
    ),
    (
        "Draineur 3 En 1 Liquid Burner", 
        2,
        "Le brûle graisses idéal pour vous accompagner au quotidien !",
        20,
        10,
        "Le Laboratoire Eric Favre Santé® a développé la gamme Liquid 4 Life pour vous aider à vous sentir bien dans votre corps afin de ne pas laisser les désagréments du quotidien vous gâcher la vie !
        La gamme Liquid 4 Life c'est :
        • Des formules concentrées, des ingrédients sélectionnés
        • SANS sucre ajouté, SANS colorant, 100% VEGAN
        • Des saveurs fruitées
        • Facile d'utilisation",
        "Liquid_Burner-min"
    ),
    (
        "Liquid Detox - Draineur", 
        2,
        "Liquid detox - Draineur",
        15.50,
        10,
        "Le laboratoire Eric Favre Santé® a développé ce liquide détox pour vous aider à vous sentir bien dans votre corps afin de ne pas laisser les désagréments du quotiden vous gâcher la vie ! Le Liquid Détox, c'est :
        • Des formules concentrées, des ingrédients sélectionnés
        • SANS colorant, SANS ASPARTAME, 100% VEGAN
        • Des saveurs fruitées
        • Facile d'utilisation",
        "Liquid_Detox-min"
    ),
    (   -- Catégorie "Protéines"
        "Casein +", 
        3,
        "Récupération & construction musculaire - Fort pouvoir satiétant",
        67.90,
        10,
        "Casein+ est riche en protéine et est composée de la source la plus qualitative de caséine : la caséine micellaire. Cette protéine est très appréciée en période de sèche ou de privation alimentaire du fait qu'elle est assimilée très lentement. Elle est souvent consommée le soir pour favoriser une bonne récupération musculaire. Enrichie en HMB, Vitamine B, magnésium et calcium son efficacité n'en saura que renforcée.
        Casein+ peut être utilisée quelque soit le sport que vous pratiquez ou l'objectif recherché :
        •  Musculation & Fitness : entretien1 et récupération musculaire
        •  Endurance, Sports collectifs et explosifs : récupération musculaire
        •  Périodes de sèche et privation alimentaire (fort pouvoir satiétant)",
        "Caseine_plus_isolate-min"
    ),
    (   
        "Iso Zero 100% Whey Protéine", 
        3,
        "Iso zero 100% whey - Protéines isolate pour le développement musculaire - Saveur Triple Choco",
        64.50,
        10,
        "ISO ZERO est constituée de plus de 83% de protéines de whey (WPI, WPC), l'une des plus pures sources de protéines. Ces 83% de protéines proviennent uniquement de la whey : sans ajout d'acides aminés synthétiques, ni collagène, ni gluten (100% from whey). Preuve de sa quallité également, son indice chimique supérieur à 100. Le laboratoire Eric Favre® l'a sélectionnée pour son assimilation rapide permettant le développement musculaire, en effet, les protéines contribuent à augmenter la masse musculaire. De part son process d'extraction la protéine n'est que très peu dénaturée et lui assure une très bonne digestion.",
        "Iso_Whey_Zero_Chocolat-min"
    ),
    (   
        "Iso Zero 100% Whey Protéine", 
        3,
        "Iso zero 100% whey - Protéines isolate pour le développement musculaire - Saveur Chocotella",
        64.50,
        10,
        "ISO ZERO est constituée de 85% de protéines de whey (WPI, WPC), l'une des plus pures sources de protéines. Ces 85% de protéines proviennent uniquement de la whey : sans ajout d'acides aminés synthétiques, ni collagène, ni gluten (100% from whey). Preuve de sa quallité également, son indice chimique supérieur à 100. Le laboratoire Eric Favre® l'a sélectionné pour son assimilation rapide permettant le développement musculaire, en effet, les protéines contribuent à augmenter la masse musculaire. De part son process d'extraction la protéine n'est que très peu dénaturée et lui assure une très bonne digestion",
        "Iso_Whey_Zero_Chocotella-min"
    ),
    (   
        "Iso Zero 100% Whey Protéine", 
        3,
        "Iso zero 100% whey - Protéines isolate pour le développement musculaire - Saveur Cookies & Cream",
        64.50,
        10,
        "ISO ZERO est constituée de + de 85% de protéines d'isolate de whey (WPH, WPI), l'une des plus pures sources de protéines. Le laboratoire Eric Favre® l'a sélectionnée pour son assimilation rapide permettant l'anabolisme musculaire. De part sa microfiltration à froid, la protéine n'est que très peu dénaturée et lui assure une très bonne digestion. Les protéines contribuent à augmenter la masse musculaire.",
        "Iso_Whey_Zero_Cookie-min"
    ),
    (   
        "Iso Zero 100% Whey Protéine", 
        3,
        "Iso zero 100% whey - Protéines isolate pour le développement musculaire - Saveur Framboisier",
        64.50,
        10,
        "ISO ZERO est constituée de 85% de protéines de whey (WPI, WPC), l'une des plus pures sources de protéines. Ces 85% de protéines proviennent uniquement de la whey : sans ajout d'acides aminés synthétiques, ni collagène, ni gluten (100% from whey). Preuve de sa quallité également, son indice chimique supérieur à 100. Le laboratoire Eric Favre® l'a sélectionnée pour son assimilation rapide permettant le développement musculaire, en effet, les protéines contribuent à augmenter la masse musculaire. De part son process d'extraction la protéine n'est que très peu dénaturée et lui assure une très bonne digestion.",
        "Iso_Whey_Zero_Framboise-min"
    ),
    (   
        "Iso Zero 100% Whey Protéine", 
        3,
        "Iso zero 100% whey - Protéines isolate pour le développement musculaire - Saveur Pistache",
        64.50,
        10,
        "ISO ZERO est constituée de 85% de protéines de whey (WPI, WPC), l'une des plus pures sources de protéines. Ces 85% de protéines proviennent uniquement de la whey : sans ajout d'acides aminés synthétiques, ni collagène, ni gluten (100% from whey). Preuve de sa quallité également, son indice chimique supérieur à 100. Le laboratoire Eric Favre® l'a sélectionnée pour son assimilation rapide permettant le développement musculaire, en effet, les protéines contribuent à augmenter la masse musculaire. De part son process d'extraction la protéine n'est que très peu dénaturée et lui assure une très bonne digestion.",
        "Iso_Whey_Zero_Pistache-min"
    ),
    (   
        "Iso Zero 100% Whey Protéine", 
        3,
        "Iso zero 100% whey - Protéines isolate pour le développement musculaire - Saveur Vanille",
        64.50,
        10,
        "ISO ZERO est constituée de + de 85% de protéines d'isolate de whey (WPH, WPI), l'une des plus pures sources de protéines. Le laboratoire Eric Favre® l'a sélectionnée pour son assimilation rapide permettant l'anabolisme musculaire. De part sa microfiltration à froid, la protéine n'est que très peu dénaturée et lui assure une très bonne digestion. Les protéines contribuent à augmenter la masse musculaire.",
        "Iso_Whey_Zero_Vanille-min"
    ),
    (   
        "Barre protéinée Need's Crunchy Choco Caramel", 
        3,
        "Barre croustillante et protéinée, saveur Double Chocolat Caramel",
        20,
        10,
        "Need's Crunchy est une barre riche en protéines qui sera appréciée de tous grâce à sa saveur gourmande de double chocolat agrémenté de pépites d'amandes. Les 35% de protéines qu'elles contiennent seront appréciés des sportifs pour son soutien et son développement musculaire.",
        "Needs_Barre_Crunchy_Choco_Caramel-min"
    ),
    (   
        "Barre protéinée Need's Crunchy Cranberry - Grenade", 
        3,
        "Barre croustillante et protéinée, saveur Double Chocolat aux pépites d'amandes",
        20,
        10,
        "Need's Crunchy est une barre riche en protéines qui sera appréciée de tous grâce à sa saveur gourmande de double chocolat agrémenté de pépites d'amandes. Les 35% de protéines qu'elles contiennent seront appréciés des sportifs pour son soutien et son développement musculaire.",
        "Needs_Barre_Crunchy_Cranberry-min"
    ),
    (   
        "Barres Protéinées Need's High Protein", 
        3,
        "Pour une pause protéinée à croustiller de plaisir !",
        20,
        10,
        "Des ingrédients de qualité, un goût à se damner, et des protéines en plus : découvrez la Need's High Protein !
        Une barre croustillante et riche en protéines qui séduira tous les sportifs, notamment grâce aux protéines de lactosérum1 et à la caséinate de calcium2. Découvrez une nouvelle façon de consommer des protéines avec une délicieuse barre source de BCAA et riche en fibres*.

        Sportif ou simplement actif, régalez-vous avec une collation saine qui contribuera à votre tonus et votre entretien musculaire.
        Encas idéal avant et après l'effort, sa saveur gourmande Caramel ravira les plus gourmands !",
        "Needs_Barre_High_Prot_Caramel-min"
    ),
    (   
        "Barres Protéinées Need's High Protein", 
        3,
        "Pour une pause protéinée à croustiller de plaisir !",
        20,
        10,
        "Des ingrédients de qualité, un goût à se damner, et des protéines en plus : découvrez la Need's High Protein !
        Une barre croustillante et riche en protéines qui séduira tous les sportifs, notamment grâce aux protéines de lactosérum1 et à la caséinate de calcium2. Découvrez une nouvelle façon de consommer des protéines avec une délicieuse barre source de BCAA et riche en fibres*.

        Sportif ou simplement actif, régalez-vous avec une collation saine qui contribuera à votre tonus et votre entretien musculaire.
        Encas idéal avant et après l'effort, sa saveur gourmande Caramel ravira les plus gourmands !",
        "Needs_Barre_High_Prot_Chcolat_Blanc-min"
    ),
    (   
        "Barres Protéinées Need's High Protein", 
        3,
        "Pour une pause protéinée à croustiller de plaisir !",
        20,
        10,
        "Need's Crunchy est une barre riche en protéines qui sera appréciée de tous grâce à sa saveur gourmande de double chocolat agrémenté de pépites d'amandes. Les 35% de protéines qu'elles contiennent seront appréciés des sportifs pour son soutien et son développement musculaire.",
        "Needs_Barre_High_Prot_Vanille_Amande-min"
    ),
    (   
        "Protéines végétales tri-source, Protein Vegan, Chocolat/Noisette", 
        3,
        "Pour une prise de muscles 100% Vegan, Protéines végétales, sans lait de vache",
        20,
        10,
        "PROTEINES VEGAN est issu de 3 sources de protéines : le pois, le riz et la spiruline titrée en chlorophylle. Protéines vegan est recommandé dans le cadre d'un programme d'entretien musculaire . Il est également recommandé pour toutes les personnes ne consommant pas assez de protéines ou ayant un besoin accru en protéines (végétariens, sportifs...)

        Protéines vegan contient 80 % de protéines qui favorisent l'augmentation et le maintien de la masse musculaire. Contient également du ModCarb™, un mélange de glucides issus de céréales biologique (avoine, sarrasin, quinoa, amarante et millet).",
        "Protein_Vegan-min"
    ),
    (   
        "Proteine_Pancakes-min", 
        3,
        "Préparation pour pâte à pancakes protéinés, saveur vanille",
        15.50,
        10,
        "Moelleux, gourmands et “healthy”, NEED'S PROTEIN PANCAKES feront l'unanimité tant pour leur goût délicieux que pour leurs qualités nutritives et leur facilité et rapidité de préparation.

        NEED'S PROTEIN PANCAKES est :
        Riche en protéines
        Construction, récupération musculaire1
        Faible en sucres
        Glucides complexes (libération progressive des sucres dans le sang)
        Riche en fibres
        Satiétant",
        "Proteine_Pancakes-min"
    ),
    (   
        "Spiruline", 
        9.00,
        "La spiruline accompagne votre santé au quotidien.",
        20,
        10,
        "Traditionnellement utilisée pour ses qualités nutritives, la spiruline ou algue d'eau douce est un véritable partenaire au quotidien. Ce super aliment est effectivement un concentré de nutriments.
        SPIRULINE BIO VEGAN est composée de spiruline riche en protéines (60% de son poids sec) contenant notamment des acides aminés essentiels.

        SPIRULINE BIO VEGAN est titrée en chlorophylle, phycocyanine, caroténoïdes... C'est aussi une source riche en anti-oxydants qui aide le corps à se protéger contre les conséquences du stress oxydatif.
        La spiruline est donc un ingrédient plus complet qui agit sur tous les fronts.",
        "Spiruline_500-min"
    ),
    (   
        "Spiruline Vegan Bio", 
        3,
        "La spiruline accompagne votre santé au quotidien.",
        18.90,
        10,
        "Traditionnellement utilisée pour ses qualités nutritives, la spiruline ou algue d'eau douce est un véritable partenaire au quotidien. Ce super aliment est effectivement un concentré de nutriments.
        SPIRULINE BIO VEGAN est composée de spiruline riche en protéines (60% de son poids sec) contenant notamment des acides aminés essentiels.

        SPIRULINE BIO VEGAN est titrée en chlorophylle, phycocyanine, caroténoïdes... C'est aussi une source riche en anti-oxydants qui aide le corps à se protéger contre les conséquences du stress oxydatif.
        La spiruline est donc un ingrédient plus complet qui agit sur tous les fronts.",
        "Spiruline-min"
    ),
    (   
        "Whey Optimax Protein", 
        3,
        "L'excellence pour les muscles - Protéines de Whey bi-sources",
        50.90,
        10,
        "Whey Optimax Protein est constitué de plus de 74% de protéines provenant de 2 sources combinées : Whey Protein Concentrate (WPC) et une protéine de levure AnPro®.

        Cette nouvelle source de protéines est reconnue pour sa forte teneur en BCAA et en acides aminés essentiels. Preuve de sa qualité, son indice chimique est nettement supérieur à 100.

        Pour en apprécier son goût et son onctuosité, Whey Optimax Protein est disponible en 3 délicieuses saveurs : Chocolat, Vanille et Biscuit Cookie.

        Avec plus de 22g de protéines et seulement 120Kcal par shaker, la Whey Optimax Protein est également faible en sucre (- de 1g par shaker) et dispose d'une faible teneur en acides gras saturés (0,4g par shaker).",
        "Whey_Optimax_Chocolat-min"
    ),
    (   
        "Whey Optimax Protein", 
        3,
        "L'excellence pour les muscles - Protéines de Whey bi-sources",
        50.90,
        10,
        "Whey Optimax Protein est constitué de plus de 74% de protéines provenant de 2 sources combinées : Whey Protein Concentrate (WPC) et une protéine de levure AnPro®.

        Cette nouvelle source de protéines est reconnue pour sa forte teneur en BCAA et en acides aminés essentiels. Preuve de sa qualité, son indice chimique est nettement supérieur à 100.

        Pour en apprécier son goût et son onctuosité, Whey Optimax Protein est disponible en 3 délicieuses saveurs : Chocolat, Vanille et Biscuit Cookie.

        Avec plus de 22g de protéines et seulement 120Kcal par shaker, la Whey Optimax Protein est également faible en sucre (- de 1g par shaker) et dispose d'une faible teneur en acides gras saturés (0,4g par shaker).",
        "Whey_Optimax_Cookie-min"
    ),
    (   
        "Whey Optimax Protein", 
        3,
        "L'excellence pour les muscles - Protéines de Whey bi-sources",
        50.90,
        10,
        "Whey Optimax Protein est constitué de plus de 74% de protéines provenant de 2 sources combinées : Whey Protein Concentrate (WPC) et une protéine de levure AnPro®.

        Cette nouvelle source de protéines est reconnue pour sa forte teneur en BCAA et en acides aminés essentiels. Preuve de sa qualité, son indice chimique est nettement supérieur à 100.

        Pour en apprécier son goût et son onctuosité, Whey Optimax Protein est disponible en 3 délicieuses saveurs : Chocolat, Vanille et Biscuit Cookie.

        Avec plus de 22g de protéines et seulement 120Kcal par shaker, la Whey Optimax Protein est également faible en sucre (- de 1g par shaker) et dispose d'une faible teneur en acides gras saturés (0,4g par shaker).",
        "Whey_Optimax_Vanille-min"
    ),
    (   -- Récupération
        "Arginine Kyowa® 2000mg", 
        4,
        "Arginine, un acide aminé semi-essentiel pour le développement musculaire !",
        20.90,
        10,
        "Arginine est un acide aminé semi-essentiel, en fonction de l'état physiologique de chacun l'organisme peut en manquer. Pour les sportifs sérieux, cet acide aminé doit être considéré comme essentiel. Précurseur de l'oxyde nitrique (N.O), il va permettre un meilleur apport des nutriments vers les muscles et donc favoriser le développement musculaire.

        Vegan et dosée à 2000mg, Arginine est labellisée Kyowa Quality® assurant un gage de qualité fort. Kyowa, une référence mondiale à très forte notoriété. Le label Kyowa est l'aboutissement de 60 ans de recherches réalisées par des experts pour développer la meilleure qualité et efficacité de produits. Kyowa Quality® et le logo KQ sont des marques déposées de KYOWA HAKKO BIO CO., LTD",
        "Arginine_2000mg-min"
    ),
    (  
        "Endol - Roll-on décontractant", 
        4,
        "Applicateur Roll-On en agissant sur vos muscles et articulations",
        20,
        10,
        "Roll on de massage agissant sur les muscles et articulations pour venir les préparer, les décontracter et les soulager. Il conviendra aussi bien lors d'une activité sportive (en préparation et récupération) que pour les personnes sédentaires ou ayant un travail physique.",
        "Endol-min"
    ),
    (  
        "Myo D - Décontraction musculaire", 
        4,
        "Myo D aide à la décontraction des muscles après l'effort !",
        9.40,
        10,
        "Myo D est composé d'un ensemble d'ingrédients sélectionnés pour contribuer à la décontraction musculaire :
        • L'orange amer est reconnue pour ses propriétés apaisantes et relaxantes.
        • La scutellaire contribue au bon fonctionnement des muscles du squelette, lors d'une activité physique normale, d'exercice physique, ou de sport et améliore la mobilité.",
        "Myo_D-min"
    ),
    (  
        "Pure Collagen + Formule Liquide", 
        4,
        "Le Collagène Marin pour votre Santé",
        20.50,
        10,
        "Dès 20 ans, nous perdons 1% de collagène par an, un apport est donc indispensable car cette protéine est présente dans nos tissus conjonctifs (peau, tissus osseux, tendons, ligaments).
        PURE COLLAGEN+ est l'indispensable santé (sportifs, personnes actives et âgées) & beauté (peaux matures et/ou fragilisées, ongles et cheveux) grâce, notamment, à la présence des 4 000mg de collagène marin hydrolysé, du zinc qui contribue au maintien d'une ossature normale et qui aide également au maintien d'une peau, de cheveux et d'ongles normaux, d'acide hyaluronique, de sélénium et de vitamine E.
        Le collagène présent dans PURE COLLEGEN+ est un collagène marin hydrolysé permettant une meilleure assimilation par l'organisme (les molécules de collagène ont été réduites, elles sont comme prédigérées).",
        "Pure_Collagen_Plus-min"
    ),
    (   
        "ZMA + 120 Gélules", 
        4,
        "Avec ZMA +, boostez votre énergie au quotidien et votre testostérone.",
        18.90,
        10,
        "ZMA+ est un complexe de zinc, de magnésium et de vitamine B6 au dosage maximal pour vous accompagner lors des vos efforts physiques mais aussi au quotidien.

        Booster votre taux de testostérone grâce au zinc qui contribue au maintien d'un taux normal de testostérone dans le sang ainsi qu'au bon fonctionnement du système immunitaire. Le magnésium quant à lui contribue à une fonction musculaire normale, une synthèse protéique normale ainsi qu'à réduire la fatigue.

        Notre formule à base de trois sources de magnésium, de zinc, de vitamine B6 vous accompagne au quotidien : le zinc contribue à une fonction cognitive normale et le magnésium contribue à réduire la fatigue. Nous vous le conseillons pour tout ce qui est fatigue passagère, surmenage, difficulté à se concentrer et à mémoriser (période d'examens, concours.)",
        "Zma_Plus-min"
    ),
    (   -- Vitamines
        "BCAA 8.1.1 ZERO Vegan 500gr", 
        5,
        "Idéal pour les sports de force et d'endurance",
        27.90,
        10,
        "Les B.C.A.A. (branched-chain amino acids) ou acides aminés ramifiés regroupent 3 acides aminés essentiels : la leucine, l'isoleucine et la valine.
        Ils sont très présents dans le tissu musculaire et entrent donc dans la constitution du muscle. Un apport en BCAA est donc indispensable lors de la pratique d'un sport et ce, quelque soit ce dernier (body, fitness, sports d'endurance, explosif...). Non synthétisés par l'organisme, ils doivent être apportés par l'alimentation et/ou la supplémentation.
        BCAA 8:1:1 est constitué de 8 parts de Leucine pour 1 part d'Isoleucine et 1 part de Valine.

        BCAA 8.1.1 Zero est sans aspartame, sans nano, sans conservateurs.",
        "Bcaa_8_1_1_Zero_Ananas-min"
    ),
    (  
        "BCAA 8.1.1 ZERO Vegan 500gr", 
        5,
        "Idéal pour les sports de force et d'endurance",
        27.90,
        10,
        "Les B.C.A.A. (branched-chain amino acids) ou acides aminés ramifiés regroupent 3 acides aminés essentiels : la leucine, l'isoleucine et la valine.
        Ils sont très présents dans le tissu musculaire et entrent donc dans la constitution du muscle. Un apport en BCAA est donc indispensable lors de la pratique d'un sport et ce, quelque soit ce dernier (body, fitness, sports d'endurance, explosif...). Non synthétisés par l'organisme, ils doivent être apportés par l'alimentation et/ou la supplémentation.
        BCAA 8:1:1 est constitué de 8 parts de Leucine pour 1 part d'Isoleucine et 1 part de Valine.

        BCAA 8.1.1 Zero est sans aspartame, sans nano, sans conservateurs.",
        "Bcaa_8_1_1_Zero_Citron-min"
    ),
    (  
        "BCAA 8.1.1 ZERO Vegan 500gr", 
        5,
        "Idéal pour les sports de force et d'endurance",
        27.90,
        10,
        "Les B.C.A.A. (branched-chain amino acids) ou acides aminés ramifiés regroupent 3 acides aminés essentiels : la leucine, l'isoleucine et la valine.
        Ils sont très présents dans le tissu musculaire et entrent donc dans la constitution du muscle. Un apport en BCAA est donc indispensable lors de la pratique d'un sport et ce, quelque soit ce dernier (body, fitness, sports d'endurance, explosif...). Non synthétisés par l'organisme, ils doivent être apportés par l'alimentation et/ou la supplémentation.
        BCAA 8:1:1 est constitué de 8 parts de Leucine pour 1 part d'Isoleucine et 1 part de Valine.

        BCAA 8.1.1 Zero est sans aspartame, sans nano, sans conservateurs.",
        "Bcaa_8_1_1_Zero_Fraise-min"
    ),
    (  
        "BCAA 8.1.1 ZERO Vegan 500gr", 
        5,
        "Idéal pour les sports de force et d'endurance",
        27.90,
        10,
        "Les B.C.A.A. (branched-chain amino acids) ou acides aminés ramifiés regroupent 3 acides aminés essentiels : la leucine, l'isoleucine et la valine.
        Ils sont très présents dans le tissu musculaire et entrent donc dans la constitution du muscle. Un apport en BCAA est donc indispensable lors de la pratique d'un sport et ce, quelque soit ce dernier (body, fitness, sports d'endurance, explosif...). Non synthétisés par l'organisme, ils doivent être apportés par l'alimentation et/ou la supplémentation.
        BCAA 8:1:1 est constitué de 8 parts de Leucine pour 1 part d'Isoleucine et 1 part de Valine.

        BCAA 8.1.1 Zero est sans aspartame, sans nano, sans conservateurs.",
        "Bcaa_8_1_1_Zero_Peche-min"
    ),
    (  
        "BCAA 8.1.1 ZERO Vegan 500gr", 
        5,
        "Idéal pour les sports de force et d'endurance",
        27.90,
        10,
        "Les B.C.A.A. (branched-chain amino acids) ou acides aminés ramifiés regroupent 3 acides aminés essentiels : la leucine, l'isoleucine et la valine.
        Ils sont très présents dans le tissu musculaire et entrent donc dans la constitution du muscle. Un apport en BCAA est donc indispensable lors de la pratique d'un sport et ce, quelque soit ce dernier (body, fitness, sports d'endurance, explosif...). Non synthétisés par l'organisme, ils doivent être apportés par l'alimentation et/ou la supplémentation.
        BCAA 8:1:1 est constitué de 8 parts de Leucine pour 1 part d'Isoleucine et 1 part de Valine.

        BCAA 8.1.1 Zero est sans aspartame, sans nano, sans conservateurs.",
        "Bcaa_8_1_1_Zero_Poire-min"
    ),
    (  
        "BCAA 8.1.1 ZERO Vegan 500gr", 
        5,
        "Idéal pour les sports de force et d'endurance",
        27.90,
        10,
        "Les B.C.A.A. (branched-chain amino acids) ou acides aminés ramifiés regroupent 3 acides aminés essentiels : la leucine, l'isoleucine et la valine.
        Ils sont très présents dans le tissu musculaire et entrent donc dans la constitution du muscle. Un apport en BCAA est donc indispensable lors de la pratique d'un sport et ce, quelque soit ce dernier (body, fitness, sports d'endurance, explosif...). Non synthétisés par l'organisme, ils doivent être apportés par l'alimentation et/ou la supplémentation.
        BCAA 8:1:1 est constitué de 8 parts de Leucine pour 1 part d'Isoleucine et 1 part de Valine.

        BCAA 8.1.1 Zero est sans aspartame, sans nano, sans conservateurs.",
        "Bcaa_8_1_1_Zero_Rasberry-min"
    ),
    (  
        "BCAA Optimiz - BCAA 2:1:1 - Acides aminés essentiels", 
        5,
        "BCAA Optimiz 2:1:1 - Idéal pendant l'entraînement",
        17.90,
        10,
        "Les B.C.A.A. (branched-chain amino acids) ou acides aminés ramifiés regroupent 3 acides aminés essentiels : la leucine, l'isoleucine et la valine. Ils sont très présents dans le tissu musculaire et entrent donc dans la constitution du muscle. Un apport en BCAA est donc indispensable lors de la pratique d'un sport et ce, quelque soit ce dernier (body, fitness, sports d'endurance, explosif...). Non synthétisés par l'organisme, ils doivent être apportés par l'alimentation et/ou la supplémentation.

        Les B.C.A.A Optimiz sont idéales pour une utilisation pendant l'entraînement.",
        "Bcaa_Optimiz_Fruits_Des_Bois-min"
    ),
    (  
        "BCAA Optimiz - BCAA 2:1:1 - Acides aminés essentiels", 
        5,
        "BCAA Optimiz 2:1:1 - Idéal pendant l'entraînement",
        17.90,
        10,
        "Les B.C.A.A. (branched-chain amino acids) ou acides aminés ramifiés regroupent 3 acides aminés essentiels : la leucine, l'isoleucine et la valine. Ils sont très présents dans le tissu musculaire et entrent donc dans la constitution du muscle. Un apport en BCAA est donc indispensable lors de la pratique d'un sport et ce, quelque soit ce dernier (body, fitness, sports d'endurance, explosif...). Non synthétisés par l'organisme, ils doivent être apportés par l'alimentation et/ou la supplémentation.

        Les B.C.A.A Optimiz sont idéales pour une utilisation pendant l'entraînement.",
        "Bcaa_Optimiz_Tropical-min"
    ),
    (  
        "Ceflaxyne ®", 
        5,
        "Des plantes apaisantes et relaxantes - Tête, ventre et respiration.",
        20,
        10,
        "CEFLAXYNE® du Laboratoire Eric Favre® est une association exclusive d'extraits de plantes hautement dosée (plus de 2830mg par prise) permettant une action complète :
        - La grande camomille relaxe la tête.
        - Le gingembre contribue à maintenir une bonne santé du système respiratoire et au fonctionnement normal du système digestif.


        CEFLAXYNE est un comprimé gastro-résistant c'est-à-dire que l'ensemble des extraits se libère dans l'intestin pour une assimilation optimale.",
        "Ceflaxyne-min"
    ),
    (  
        "Glutamine Pro Zero", 
        5,
        "Pure L-glutamine favorise la récupération après un exercice intense",
        23.90,
        10,
        "La glutamine ou L-glutamine est l'acide aminé le plus abondant dans le sang et les muscles. Elle joue un rôle dans la synthèse des protéines.
        Après l'exercice intense, les réserves musculaires en glutamine diminuent considérablement il est donc important d'en apporter par la supplémentation.",
        "Glutamine_Pro_Zero-min"
    ),
    (  
        "L-Carnitine 2000mg", 
        5,
        "L-Carnitine, un acide aminé semi-essentiel pour brûler des graisses ! ",
        20.90,
        10,
        "La carnitine est un acide aminé non essentiel et représente un véritable carburant pour les muscles. Acide aminé à forte notoriété auprès des sportifs pour ces nombreux bienfaits pour l'organisme (bruleur, antioxydant, énergie…). Avec un apport journalier de 2000mg par jour, la L-Carnitine de la marque Eric Favre est d'origine vegan et encapsulée dans une gélule végétale.",
        "L_Carnitine_2000mg-min"
    ),
    (  
        "L-Tyrosine 1000mg", 
        5,
        "L-Tyrosine, un acide aminé semi-essentiel pour atteindre tes objectifs ! ",
        13.90,
        10,
        "La tyrosine est un acide aminé non essentiel, précurseur de 3 neurotransmetteurs pour la performance et l'énergie musculaire. Avec son apport journalier de 1000mg et 100% pure, la L-Tyrosine du laboratoire Eric Favre saura vous accompagner au quotidien pour vous aider à atteindre vos objectifs.",
        "L_Tyrosine_1000mg"
    ),
    (  
        "Vitamines B max - Métabolisme énergétique", 
        5,
        "90 jours de programme avec Vitamines B Max pour remettre d'aplomb votre métabolisme",
        15.90,
        10,
        "Vitamines B Max est un complément alimentaire complet puisqu'il contient l'ensemble des vitamines du Groupe B à des dosages maximum. Ces vitamines sont reconnues pour être au carrefour des métabolismes : glucides, protéines, lipides.
        • La vitamine B1 contribue à un métabolisme énergétique normal.
        • La vitamine B6 contribue à réguler l'activité hormonale.

        Les vitamines B2, B3, B5, B6 et B12 contribuent à réduire la fatigue.
        Les vitamines B6 et B12 contribuent au fonctionnement normal du système immunitaire.
        La vitamine B1 contribue à une fonction cardiaque normale.
        La vitamine B9 contribue à la synthèse normale des acides aminés.
        Toutes ces vitamines contribuent à l'amélioration des fonctions psychologiques",    
        "Vitamine_B_Max-min"
    ),
    (  
        "Vitamine C Vegan - Boostez Votre Tonus", 
        5,
        "La vitamine C pour stimuler votre vitalité et votre tonus !",
        15.20,
        10,
        "La vitamine C est une vitamine hydrosoluble, soluble dans l'eau et ne peut être stockée par notre organisme. De plus, c'est une vitamine essentielle soit une vitamine que l'on ne peut pas synthétiser.
        Nous devons donc l'apporter à notre organisme par l'alimentation ou la supplémentation au quotidien. Les fruits et les légumes contiennent de la vitamine C mais c'est une vitamine très fragile qui se détériore donc très vite, notamment lors de la cuisson.

        La vitamine C est indispensable pour le bon fonctionnement de notre organisme puisqu'elle intervient sur de nombreux paramètres en contribuant au :
        • Fonctionnement normal du système immunitaire
        • La réduction de la fatigue
        • Métabolisme énergétique normal
        • La protection des cellules contre le stress oxydatif
        • Fonctions psychologiques normales",
        "Vitamine_C-min"
    ),
    (  
        "Vitamine D3", 
        5,
        "Ensoleillez votre quotidien !",
        20,
        10,
        "Savez-vous que + d'un Français sur 2 consomme 6 fois moins de vitamine D3 que la quantité recommandée1 ?
        La vitamine D3 est synthétisée par le corps humain lorsque la peau est exposée aux rayons UVB du soleil.

        La vitamine D3, aussi appelée la vitamine du soleil, contribue à l'absorption du calcium2 et du phosphore de l'alimentation dans la circulation du sang. Elle est donc indispensable à la santé des os et des dents à tout âge !",
        "Vitamine_D3-min"
    ),
    (  
        "Vitamine C Effervescente", 
        5,
        "Pour une énergie pétillante !",
        20,
        10,
        "La vitamine C est une vitamine essentielle car l'organisme ne peut pas la synthétiser.
        De nos jours, notre alimentation est très souvent déficiente dans cette vitamine. Pour cause, elle est très fragile et se détériore très vite.
        Une supplémentation en vitamine C est alors nécessaire !

        La vitamine C joue de très nombreux rôles dans l'organisme. Elle contribue :
        • Au fonctionnement normal du système immunitaire,
        • A la réduction de la fatigue,
        • A métabolisme énergétique normal,
        • A la protection des cellules contre le stress oxydatif,
        • Aux fonctions psychologiques normales.",
        "Vitamine_Plus_Zinc-min"
    ),
    (  
        "Vitamino+ Immunité, fatigue, Multivitamines et minéraux", 
        5,
        "Vitamino+ stimule votre immunité et vous permet de lutter contre la fatigue",
        14.80,
        10,
        "Les changements de saison sont souvent synonyme de fatigue, baisse de vitalité... Pour booster sa forme et renforcer son immunité, rien ne vaut un cocktail à base de vitamines, de minéraux ou de plantes.
        Vitamino+ est un complément alimentaire complet (vitamines, minéraux et acides aminés) :
        Les vitamines B2, B6, B12, C et le fer contribuent à réduire la fatigue.
        Les vitamines A, B6, B9, B12, C, D, le fer et le zinc contribuent au fonctionnement normal du système immunitaire.",
        "Vitamino_Plus-min"
    );