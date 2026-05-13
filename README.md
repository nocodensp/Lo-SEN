# LO-SEN Landing Page Premium

Une landing page moderne et élégante pour LO-SEN, spécialiste de la purification d'eau.

## 🚀 Caractéristiques

- **Design Premium** : Style moderne inspiré d'Apple, Dyson, Tesla
- **Technologies Simples** : HTML5, CSS3, JavaScript léger, PHP simple
- **Responsive** : Parfait sur mobile, tablette et desktop
- **Animations Fluides** : Effets scroll, compteurs, transitions élégantes
- **Formulaire Contact** : PHP avec validation et envoi d'emails
- **WhatsApp Integration** : CTA directs vers WhatsApp
- **SEO Optimisé** : Meta tags, structure sémantique
- **Hébergement Facile** : Compatible Hostinger, FTP simple

## 📁 Structure du Projet

```
lo-sen-simple/
├── index.php                 # Page principale avec toutes les sections
├── style.css                 # Design premium avec animations
├── script.js                 # Interactions et animations JavaScript
├── contact-handler.php       # Traitement du formulaire de contact
├── includes/
│   ├── header.php            # Navigation et meta tags
│   └── footer.php            # Footer et informations de contact
├── assets/
│   ├── images/               # Images des produits et visuels
│   ├── icons/                # Icônes SVG
│   └── videos/               # Vidéos éventuelles
└── README.md                 # Ce fichier
```

## 🎨 Sections de la Landing Page

1. **Hero** : Accueil percutant avec statistiques animées
2. **Pourquoi LO-SEN** : 6 avantages principaux avec cards premium
3. **La Vérité sur l'Eau** : Informations sur les contaminants
4. **Technologies** : 4 niveaux de filtration avec comparatifs
5. **Nos Solutions** : Présentation des produits Horizon, Aquila Pro, U3
6. **Professionnels** : Solutions pour hôtels, bureaux, médical
7. **Impact Écologique** : Chiffres clés sur l'environnement
8. **Avis Clients** : Témoignages avec slider
9. **Demander un Devis** : Formulaire de contact PHP
10. **Contact** : Footer complet avec coordonnées

## 🛠 Installation

### 1. Upload sur Hostinger

1. Connectez-vous à votre compte Hostinger
2. Accédez au File Manager ou FTP
3. Uploadez tous les fichiers du dossier `lo-sen-simple`
4. Assurez-vous que les permissions sont correctes (755 pour les dossiers, 644 pour les fichiers)

### 2. Configuration du Formulaire

Modifiez le fichier `contact-handler.php` :

```php
// Remplacez avec vos véritables coordonnées
$to_email = 'votre-email@lo-sen.fr';
$whatsapp_number = '33616144538';
```

### 3. Images

Ajoutez vos images dans le dossier `assets/images/` :
- `logo-lo-sen.png` : Logo principal
- `logo-lo-sen-white.png` : Logo blanc pour footer
- `hero-lo-sen-product.png` : Image hero section
- `horizon-product.png` : Produit Horizon
- `aquila-pro-product.png` : Produit Aquila Pro
- `u3-product.png` : Produit U3
- `devis-visual.png` : Image section devis
- `avatar-marie.jpg`, `avatar-jean.jpg`, `avatar-sophie.jpg` : Photos clients

## 🎯 Personnalisation

### Couleurs

Modifiez les variables CSS dans `style.css` :

```css
:root {
    --primary-blue: #0f4c75;
    --primary-cyan: #00b4d8;
    --accent-blue: #0077b6;
    /* ... */
}
```

### Typographie

La police Poppins est chargée depuis Google Fonts. Vous pouvez la remplacer dans `header.php`.

### Animations

Les animations sont configurées dans `script.js` avec :
- Scroll reveal
- Compteurs animés
- Slider témoignages
- Effets parallax

## 📱 Responsive Design

Le site est optimisé pour :
- **Mobile** : < 480px
- **Tablette** : 480px - 768px  
- **Desktop** : > 768px

## 🔧 Maintenance

### Mise à jour du contenu

1. Textes : Modifiez directement dans `index.php`
2. Styles : Personnalisez dans `style.css`
3. Animations : Ajustez dans `script.js`
4. Contact : Configurez dans `contact-handler.php`

### SEO

Le site inclut :
- Meta tags optimisés
- Structure sémantique HTML5
- Balises Open Graph
- URLs propres

## 🚀 Performance

- **Léger** : Pas de framework lourd
- **Rapide** : CSS et JavaScript optimisés
- **Optimisé** : Images à compresser
- **Cache** : Navigateur cache activé

## 📞 Support

Pour toute question ou modification :
- WhatsApp : +33 6 12 34 56 78
- Email : contact@lo-sen.fr

## 📄 Licence

Ce projet est la propriété de LO-SEN. Tous droits réservés.

---

**LO-SEN** - Purification d'Eau Premium  
*L'eau pure, la vie meilleure*
