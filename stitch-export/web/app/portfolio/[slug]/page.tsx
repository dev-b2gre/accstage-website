import { PageShell } from "@/components/layout/page-shell";

type PortfolioDetailPageProps = {
  params: Promise<{ slug: string }>;
};

export default async function PortfolioDetailPage({ params }: PortfolioDetailPageProps) {
  const { slug } = await params;

  return (
    <PageShell
      title={`Projeto: ${slug}`}
      intro="Template base do detalhe de projeto pronto para implementação fiel ao Stitch refined."
    />
  );
}
