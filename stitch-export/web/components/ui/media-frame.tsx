import Image from "next/image";

type MediaFrameProps = {
  src: string;
  alt: string;
  width: number;
  height: number;
  className?: string;
  priority?: boolean;
};

export function MediaFrame({ src, alt, width, height, className, priority }: MediaFrameProps) {
  return (
    <Image
      src={src}
      alt={alt}
      width={width}
      height={height}
      className={className ? `media-frame ${className}` : "media-frame"}
      priority={priority}
    />
  );
}
