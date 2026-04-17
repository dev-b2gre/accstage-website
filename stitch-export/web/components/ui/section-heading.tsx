type SectionHeadingProps = {
  title: string;
};

export function SectionHeading({ title }: SectionHeadingProps) {
  return <h2 className="section-heading">{title}</h2>;
}
