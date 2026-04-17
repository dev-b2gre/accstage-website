import { philosophySection } from "@/content/home";
import { MonolithLink } from "@/components/ui/monolith-link";
import { MediaFrame } from "@/components/ui/media-frame";
import { SectionHeading } from "@/components/ui/section-heading";

export function HomePhilosophy() {
  return (
    <section className="philosophy">
      <div className="container philosophy-grid">
        <div>
          <SectionHeading title={philosophySection.title} />
          <p>{philosophySection.body}</p>
          <MonolithLink href={philosophySection.cta.href} label={philosophySection.cta.label} dark />
        </div>

        <div className="philosophy-image-wrap">
          <MediaFrame
            src={philosophySection.image}
            alt="Detalhe arquitetónico interior"
            width={900}
            height={1200}
            className="philosophy-image"
          />
        </div>
      </div>
    </section>
  );
}
