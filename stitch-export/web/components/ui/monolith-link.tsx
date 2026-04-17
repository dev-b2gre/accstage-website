import Link from "next/link";

type MonolithLinkProps = {
  href: string;
  label: string;
  dark?: boolean;
};

export function MonolithLink({ href, label, dark = false }: MonolithLinkProps) {
  return (
    <Link href={href} className={dark ? "monolith-link monolith-link-dark" : "monolith-link"}>
      {label}
    </Link>
  );
}
