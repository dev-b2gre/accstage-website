import type { Metadata } from "next";
import { Newsreader, Space_Grotesk } from "next/font/google";
import { SiteFooter } from "@/components/layout/site-footer";
import { SiteHeader } from "@/components/layout/site-header";
import "./globals.css";

const headline = Space_Grotesk({
  subsets: ["latin"],
  variable: "--font-headline"
});

const body = Newsreader({
  subsets: ["latin"],
  variable: "--font-body"
});

export const metadata: Metadata = {
  title: "ACCSTAGE | Estruturas Monolíticas",
  description: "Arquitetura premium minimalista, editorial e intemporal."
};

export default function RootLayout({
  children
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="pt-PT">
      <body className={`${headline.variable} ${body.variable}`}>
        <SiteHeader />
        <main>{children}</main>
        <SiteFooter />
      </body>
    </html>
  );
}
