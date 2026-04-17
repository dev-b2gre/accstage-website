type EyebrowLabelProps = {
  label: string;
};

export function EyebrowLabel({ label }: EyebrowLabelProps) {
  return <span className="eyebrow-label">{label}</span>;
}
