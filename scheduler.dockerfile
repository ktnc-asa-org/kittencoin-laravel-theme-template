FROM ktnc-nft-faucet-app:latest
COPY start.sh /usr/local/bin/start
RUN chmod u+x /usr/local/bin/start
ENTRYPOINT ["/usr/local/bin/start"]
