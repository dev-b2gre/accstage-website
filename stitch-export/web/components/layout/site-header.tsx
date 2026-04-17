import Link from "next/link";
import { mainNavigation } from "@/content/navigation";

export function SiteHeader() {
  return (
    <header className="site-header">
      <div className="container row">
        <div className="row left-group">
          <Link className="logo" href="/" aria-label="ACCSTAGE início">
            ACCSTAGE
          </Link>
          <nav className="desktop-nav" aria-label="Navegação principal">
            {mainNavigation.map((item) => (
              <Link key={item.label} href={item.href}>
                {item.label}
              </Link>
            ))}
          </nav>
        </div>

        <Link className="inquire-cta" href="/contactos">
          Contactar
        </Link>
      </div>
    </header>
  );
}
