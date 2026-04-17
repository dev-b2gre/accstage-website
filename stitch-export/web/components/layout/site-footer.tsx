const footerLinks = ["Instagram", "LinkedIn", "Contact", "Privacy", "Terms"];

export function SiteFooter() {
  return (
    <footer className="site-footer">
      <div className="container">
        <div className="footer-top">
          <nav className="footer-links" aria-label="Footer links">
            {footerLinks.map((link) => (
              <a key={link} href="#">
                {link}
              </a>
            ))}
          </nav>
          <p className="copyright">© 2024 ACCSTAGE MONOLITHIC STRUCTURES. ALL RIGHTS RESERVED.</p>
        </div>

        <div className="footer-brand-wrap">
          <span className="footer-brand">ACCSTAGE</span>
        </div>
      </div>
    </footer>
  );
}
