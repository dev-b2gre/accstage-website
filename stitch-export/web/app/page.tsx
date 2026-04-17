import { HomeArchivePreview } from "@/components/sections/home/home-archive-preview";
import { HomeHero } from "@/components/sections/home/home-hero";
import { HomePhilosophy } from "@/components/sections/home/home-philosophy";

export default function HomePage() {
  return (
    <>
      <HomeHero />
      <HomePhilosophy />
      <HomeArchivePreview />
    </>
  );
}
