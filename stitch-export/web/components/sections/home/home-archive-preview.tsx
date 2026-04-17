import Link from "next/link";
import { archivePreview } from "@/content/home";
import { EyebrowLabel } from "@/components/ui/eyebrow-label";
import { HairlineDivider } from "@/components/ui/hairline-divider";
import { MediaFrame } from "@/components/ui/media-frame";
import { SectionHeading } from "@/components/ui/section-heading";
import { MonolithLink } from "@/components/ui/monolith-link";

export function HomeArchivePreview() {
  return (
    <section className="archive">
      <div className="container">
        <div className="archive-head">
          <SectionHeading title={archivePreview.title} />
          <EyebrowLabel label={archivePreview.period} />
        </div>

        <HairlineDivider />

        <div className="archive-grid">
          {archivePreview.projects.map((project) => (
            <article key={project.slug} className={`project-card ${project.className}`}>
              <MediaFrame src={project.image} alt={project.title} width={1600} height={900} />
              <div className="project-meta">
                <div>
                  <h3>{project.title}</h3>
                  <p>{project.location}</p>
                </div>
                <Link href={`/portfolio/${project.slug}`} aria-label={`Abrir projeto ${project.title}`}>
                  →
                </Link>
              </div>
            </article>
          ))}
        </div>

        <div className="archive-cta">
          <MonolithLink href={archivePreview.cta.href} label={archivePreview.cta.label} dark />
        </div>
      </div>
    </section>
  );
}
