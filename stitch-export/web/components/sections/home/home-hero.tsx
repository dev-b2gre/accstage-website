import Image from "next/image";
import { homeHero } from "@/content/home";
import { MonolithLink } from "@/components/ui/monolith-link";

export function HomeHero() {
  return (
    <section className="hero">
      <Image src={homeHero.image} alt="Exterior monolítico ao entardecer" fill className="hero-image" priority />
      <div className="hero-overlay" />

      <div className="container hero-content">
        <h1>{homeHero.title}</h1>
        <div className="hero-side">
          <p>{homeHero.description}</p>
          <MonolithLink href={homeHero.cta.href} label={homeHero.cta.label} />
        </div>
      </div>
    </section>
  );
}
