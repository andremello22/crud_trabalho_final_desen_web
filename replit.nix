{ pkgs }: {
  deps = [
    pkgs.openssh_with_kerberos
    pkgs.ssh
    pkgs.php74
    pkgs.php74Extensions.pdo
    pkgs.sqlite
  ];
}

