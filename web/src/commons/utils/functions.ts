const formatter = new Intl.NumberFormat('pt-BR', {
  style: 'currency',
  currency: 'BRL',
  minimumFractionDigits: 2,
  maximumFractionDigits: 2,
})

export function formatAmount(amount: number): string {
  const formatedAmount = formatter.format(amount)
  return formatedAmount
}
