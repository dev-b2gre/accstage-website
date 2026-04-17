import Link from "next/link";
import { footerNavigation } from "@/content/navigation";

export function SiteFooter() {
  return (
    <footer className="site-footer">
      <div className="container">
        <div className="footer-top">
          <nav className="footer-links" aria-label="Links de rodapé">
            {footerNavigation.map((link) => (
              <Link key={link.label} href={link.href}>
                {link.label}
              </Link>
            ))}
          </nav>
          <p className="copyright">© 2026 ACCSTAGE. TODOS OS DIREITOS RESERVADOS.</p>
        </div>

        <div className="footer-brand-wrap">
          <span className="footer-brand">ACCSTAGE</span>
        </div>
      </div>
    </footer>
  );
}
