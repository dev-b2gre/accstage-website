const navItems = [
  { label: "Projects", href: "#" },
  { label: "Philosophy", href: "#" },
  { label: "Studio", href: "#" },
  { label: "Archive", href: "#" }
];

export function SiteHeader() {
  return (
    <header className="site-header">
      <div className="container row">
        <div className="row left-group">
          <a className="logo" href="#" aria-label="ACCSTAGE home">
            ACCSTAGE
          </a>
          <nav className="desktop-nav" aria-label="Main navigation">
            {navItems.map((item) => (
              <a key={item.label} href={item.href}>
                {item.label}
              </a>
            ))}
          </nav>
        </div>

        <a className="inquire-cta" href="#">
          Inquire
        </a>
      </div>
    </header>
  );
}
