// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"
import "./plugins/textfill.min"

// Import fontawesome
import fontawesome from '@fortawesome/fontawesome';
// add icon
import faFacebook from '@fortawesome/fontawesome-free-brands/faFacebookF';
import faTwitter from '@fortawesome/fontawesome-free-brands/faTwitter';
import faInstagram from '@fortawesome/fontawesome-free-brands/faInstagram';
import faYoutube from '@fortawesome/fontawesome-free-brands/faYoutube';
import faEnvelope from '@fortawesome/fontawesome-free-regular/faEnvelope';
import faImage from '@fortawesome/fontawesome-free-regular/faImage';
import faSearch from '@fortawesome/fontawesome-free-solid/faSearch';
import faLink from '@fortawesome/fontawesome-free-solid/faLink';
import faDownload from '@fortawesome/fontawesome-free-solid/faDownload';

fontawesome.config = {searchPseudoElements: true};
// add the imported icons to the library
fontawesome.library.add(faFacebook, faTwitter, faInstagram, faYoutube, faEnvelope, faImage, faSearch, faLink, faDownload);

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
