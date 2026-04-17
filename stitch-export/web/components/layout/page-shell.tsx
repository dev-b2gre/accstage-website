type PageShellProps = {
  title: string;
  intro: string;
};

export function PageShell({ title, intro }: PageShellProps) {
  return (
    <section className="base-page">
      <div className="container">
        <h1>{title}</h1>
        <p>{intro}</p>
      </div>
    </section>
  );
}
